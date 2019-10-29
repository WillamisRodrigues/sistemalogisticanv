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
        ->orderBy('kits.created_at', 'desc')
        ->get();

        return Datatables::of($kits)
        ->addColumn('action', function ($kit) {
            $button = '<button type="button" name="edit" id="'.$kit->id.'" class="edit btn btn-warning btn-md"> <i class="fa fa-pencil"></i> Editar </button>';
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
