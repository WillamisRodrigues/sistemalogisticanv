<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Validator;
use Yajra\Datatables\Datatables;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;
use App\Empresa;
use App\User;

class EmpresaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $id = auth()->user()->empresa_id;
        $unidade_id = auth()->user()->unidade_id;

        $empresas = DB::table('empresas')
        ->select('empresas.*')
        ->where('id', $id)
        ->get();
       
        $unidades = DB::table('unidades')
        ->select('unidades.*')
        ->where('id', $unidade_id)
        ->get();

       return view('empresa.index',compact('empresas','unidades'));
    }

    public function escolher(){
        $empresas = Empresa::all();
        return view('empresa.show',compact('empresas'));
    }

    public function lista_empresas(){
        $empresas = Empresa::all();

        return Datatables::of($empresas)
        ->addColumn('action', function ($empresa) {
            $button = '<button type="button" name="edit" id="'.$empresa->id.'" class="edit_empresa btn btn-warning btn-md"> <i class="fa fa-pencil"></i> Editar </button>';
            $button .= '&nbsp;&nbsp;';
            $button .= '<button type="button" name="delete" id="'.$empresa->id.'" class="delete_empresa btn btn-danger btn-md"><i class="fa fa-trash"></i> Delete</button>';
            return $button;
        })->addColumn('logar', function($empresa) {
            $button = '<a href="/logar_empresa/'.$empresa->id.'" class="btn btn-success btn-md"> <i class="fa fa-home"></i> Logar </a>';
            return $button;
        })->rawColumns(['action', 'logar'])
        ->make(true);

    }

    public function edit($id)
    {
        if(request()->ajax())
        {
            $data = Empresa::findOrFail($id);
            return response()->json(['data' => $data]);
        }
    }

    public function store(Request $request){
        $rules = array(
            'nome_empresa'    =>  'required',
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }
            $form_data = array(
                'nome_empresa' =>  $request->nome_empresa
            );
    
            Empresa::create($form_data);
    
            return response()->json(['success' => 'Empresa Adicionada com Sucesso.']);
    }

    public function update(Request $request)
    {
    
        $rules = array(
            'nome_empresa' =>  'required',
        );

            $error = Validator::make($request->all(), $rules);

            if($error->fails())
            {
                return response()->json(['errors' => $error->errors()->all()]);
            }

        $form_data = array(
            'nome_empresa' =>  $request->nome_empresa,
        );

        Empresa::whereId($request->hidden_id)->update($form_data);

        return response()->json(['success' => 'Empresa Atualizada com Sucesso']);
    }

    public function LogarUnidade($id)
    {
        $user_id = auth()->user()->id;
        
        $form_data = array(
            'empresa_id' =>  $id,
            'unidade_id' => null,
            'cod_sophia' => null
        );

        User::whereId($user_id)->update($form_data);
        return redirect()->route('empresas');
    }

    public function destroy($id)
    {
        $data = Empresa::findOrFail($id);
        $data->delete();
    }
}
