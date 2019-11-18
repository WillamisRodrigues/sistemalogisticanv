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
}
