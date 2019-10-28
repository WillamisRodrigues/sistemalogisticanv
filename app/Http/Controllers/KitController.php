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
        $empresas = Empresa::all();

        return view('kit.index',compact('empresas'));
    }
    public function lista_kits(){
        $kits = DB::table('kits')
        ->join('empresas', 'empresas.id', '=', 'kits.empresa_id')
        ->select('empresas.*', 'kits.*')
        ->get();

        return Datatables::of($kits)
        ->addColumn('action', function ($user) {
            return '<a href="#edit-'.$user->id.'" class="btn btn-md btn-warning"><i class="glyphicon glyphicon-edit"></i> Editar</a>';
        })
        ->make(true);
    }
    public function store(Request $request){
        $rules = array(
            'nome_kit'    =>  'required',
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
    
            return response()->json(['success' => 'Data Added successfully.']);
        }
    }
