<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Yajra\Datatables\Datatables;
use DB;
use App\Empresa;
use App\UnidadesImugi;
use App\User;

use Illuminate\Http\Request;

class UnidadeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
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

        return view('unidade.index',compact('empresas','unidades'));
    }

    public function lista_imugi(){
        $id = auth()->user()->empresa_id;
        $unidades = DB::table('unidades')
        ->where('empresa_id',$id)
        ->get();

        return Datatables::of($unidades)
        ->addColumn('action', function ($unidades) {
            $button = '<button type="button" name="edit" id="'.$unidades->id.'" class="edit_unidade_imugi btn btn-warning btn-md"> <i class="fa fa-pencil"></i> Editar </button>';
            $button .= '&nbsp;&nbsp;';
            $button .= '<button type="button" name="delete" id="'.$unidades->id.'" class="delete_unidade_imugi btn btn-danger btn-md"><i class="fa fa-trash"></i> Delete</button>';
            return $button;
        })->addColumn('logar', function($unidades) {
            $button = '<a href="/logar_unidade_imugi/'.$unidades->id.'" class="btn btn-success btn-md"> <i class="fa fa-home"></i> Logar </a>';
            return $button;
        })->rawColumns(['action', 'logar'])
        ->make(true);
    }
    public function LogarImugi($id)
    {
        $user_id = auth()->user()->id;
        
        $form_data = array(
            'unidade_id' =>  $id
        );

        User::whereId($user_id)->update($form_data);
        return redirect()->route('unidades');
    }
    
    public function store(Request $request){
        $rules = array(
            'nome_unidade'    =>  'required',
            'uf' => 'required',
            'cidade' => 'required',
            'cod_sophia' => 'required',
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }
            $form_data = array(
                'nome_unidade' =>  $request->nome_unidade,
                'cidade_id' => $request->cidade,
                'estado_id' => $request->uf,
                'cod_sophia_id' => $request->cod_sophia,
                'empresa_id' => $request->id_empresa

            );
    
            UnidadesImugi::create($form_data);
    
            return response()->json(['success' => 'Unidade Adicionada com Sucesso.']);
    }
}
