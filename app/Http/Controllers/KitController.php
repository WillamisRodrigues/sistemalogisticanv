<?php

namespace App\Http\Controllers;
use DB;
use Yajra\Datatables\Datatables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;
use App\Kit;
use App\Empresa;

class KitController extends Controller
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

        return view('kit.index',compact('empresas','unidades'));
    }
    
    public function lista_kits(){
        $id = auth()->user()->empresa_id;
        $kits = DB::table('kits')
        ->join('empresas', 'empresas.id', '=', 'kits.empresa_id')
        ->select('empresas.*', 'kits.*')
        ->where('kits.deleted_at',null)
        ->where('empresa_id',$id)
        ->get();

        return Datatables::of($kits)
        ->addColumn('action', function ($kit) {
            if(auth()->user()->nivel != 2){
                $button = "Você precisa do perfil Master";
            }else{
                $button = '<button type="button" name="edit" id="'.$kit->id.'" class="edit btn btn-warning btn-md"> <i class="fa fa-pencil"></i> Editar </button>';
                $button .= '&nbsp;&nbsp;';
                $button .= '<button type="button" name="delete" id="'.$kit->id.'" class="delete btn btn-danger btn-md"><i class="fa fa-trash"></i> Delete</button>';
            }
                return $button;
        })
        ->make(true);
    }
    
    public function edit($id)
    {
        if(request()->ajax())
        {
            $data = Kit::findOrFail($id);
            return response()->json(['data' => $data]);
        }
    }

    public function store(Request $request){
        $rules = array(
            'nome_kit'    =>  'required',
            'nome_empresa'    =>  'required',
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }
            $form_data = array(
                'nome_kit' =>  $request->nome_kit,
                'empresa_id' => $request->nome_empresa
            );
    
            Kit::create($form_data);
    
            return response()->json(['success' => 'Kit Adicionado com Sucesso.']);
        }
    
        public function update(Request $request)
        {
        
            $rules = array(
                'nome_kit' =>  'required',
            );
    
                $error = Validator::make($request->all(), $rules);
    
                if($error->fails())
                {
                    return response()->json(['errors' => $error->errors()->all()]);
                }
    
            $form_data = array(
                'nome_kit' =>  $request->nome_kit,
                'empresa_id' => $request->nome_empresa
            );

            Kit::whereId($request->hidden_id)->update($form_data);
    
            return response()->json(['success' => 'Kit Atualizado com Sucesso']);
        }
        public function destroy($id)
        {
            $data = Kit::findOrFail($id);
            $data->delete();
        }
    }
    
