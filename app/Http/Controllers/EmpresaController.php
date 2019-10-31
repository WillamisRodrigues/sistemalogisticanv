<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Validator;
use Yajra\Datatables\Datatables;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;
use App\Empresa;

class EmpresaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        return view('empresa.index');
    }

    public function lista_empresas(){
        $empresas = Empresa::all();

        return Datatables::of($empresas)
        ->addColumn('action', function ($empresa) {
            $button = '<button type="button" name="edit" id="'.$empresa->id.'" class="edit btn btn-warning btn-md"> <i class="fa fa-pencil"></i> Editar </button>';
            return $button;
        })
        ->make(true);
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
    
            return response()->json(['success' => 'Data Added successfully.']);
    }
}
