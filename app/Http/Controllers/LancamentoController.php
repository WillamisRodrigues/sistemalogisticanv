<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Yajra\Datatables\Datatables;
use DB;
use Illuminate\Http\Request;
use App\Empresa;
use App\Lancamento;
use App\Kit;
use App\Lancamentos; 

class LancamentoController extends Controller
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

        $kits = DB::table('kits')
        ->join('empresas', 'empresas.id', '=', 'kits.empresa_id')
        ->select('empresas.*', 'kits.*')
        ->where('kits.deleted_at',null)
        ->where('empresa_id',$id)
        ->get();
        
        return view('lancamentos.index', compact('empresas','kits','unidades'));
    }

    public function lista_lancamentos(){
        $id = auth()->user()->empresa_id;

        $kits = DB::table('lancamentos')
        ->join('unidades', 'lancamentos.unidade_id', '=', 'unidades.id')
        ->join('kits', 'kits.id', '=', 'lancamentos.kit_id')
        ->select('lancamentos.qtd_kit','lancamentos.created_at','unidades.nome_unidade','kits.nome_kit')
        ->where('kits.empresa_id',$id)
        ->get();

        return Datatables::of($kits)->make(true);
    }
    public function store(Request $request){
        $rules = array(
            'quantidade_kit' =>  'required',
            'n_ecomeerce' => 'required'
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }
            $form_data = array(
                'qtd_kit' =>  $request->quantidade_kit,
                'kit_id' => $request->kits,
                'unidade_id' => $request->unidade_id,
                'numero_ecomeerce' => $request->n_ecomeerce
            );
    
            Lancamentos::create($form_data);
    
            return response()->json(['success' => 'Lançamento Realizado com Sucesso.']);
        }
        public function update(Request $request)
        {
        
            $rules = array(
                'nome_curso' =>  'required',
            );
    
                $error = Validator::make($request->all(), $rules);
    
                if($error->fails())
                {
                    return response()->json(['errors' => $error->errors()->all()]);
                }
    
            $form_data = array(
                'nome_curso' =>  $request->nome_curso,
                'empresa_id' => $request->nome_empresa
            );

            Curso::whereId($request->hidden_id)->update($form_data);
    
            return response()->json(['success' => 'Curso Atualizado com Sucesso']);
        }
}
