<?php
namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Empresa;
use App\AlunoImugi;
use App\KitImugi;
use App\Entrada;
class BaixaAlunoController extends Controller
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
        $kits = DB::table('kits')
        ->select('kits.id','nome_kit','kits.numero_kit')
        ->where('empresa_id', $id)
        ->get();
        $unidades = DB::table('unidades')
        ->select('unidades.*')
        ->where('id', $unidade_id)
        ->get();
        return view('baixa.index',compact('empresas','kits','unidades'));
    }
    public function alunosImugi(){
        $cod_sophia = Auth::user()->cod_sophia;
        $empresa_id = Auth::user()->empresa_id;
        $alunosImugi = DB::table('logistica.kits as kits')
        ->rightJoin('imugi270_portaldoaluno.codigo as codigoimugi', 'kits.numero_kit', '=', 'codigoimugi.nivel')
        ->join('imugi270_portaldoaluno.turmas as turmas', 'turmas.matricula', '=', 'codigoimugi.matricula')
        /* ->where('codigoimugi.codUnidade',$cod_sophia)
        ->where('kits.empresa_id',$empresa_id) */
        ->select('codigoimugi.idCod', 'codigoimugi.codUnidade','codigoimugi.nivel','codigoimugi.matricula','codigoimugi.unidade',
        'codigoimugi.curso', 'turmas.nome','kits.nome_kit')
        ->get();
        return Datatables::of($alunosImugi)
        ->addColumn('action', function ($aluno) {
            $button = '<button type="button" name="edit_imugi" id="'.$aluno->idCod.'" class="edit_imugi btn btn-warning btn-md"> <i class="ti-book"></i> Baixa Material </button>';
            return $button;
        })
        ->make(true);
    }
    public function edit_imugi($id)
    {
        if(request()->ajax())
        {
            $data = AlunoImugi::find($id);
            return response()->json(['data' => $data]);
        }
    }
    public function update(Request $request)
    {
    
        $form_data = array(
            'nivel' =>  $request->nome_kit,
        );
        $produto = AlunoImugi::find($request->hidden_id);
        
        $kit =  DB::table('entrada')
        ->where('unidade_id',$request->unidade_id)
        ->select('kit_1')
        ->sum('kit_1');
       
        $kit2 =  DB::table('entrada')
        ->where('unidade_id',$request->unidade_id)
        ->select('kit_2')
        ->sum('kit_2');
       
        $kit3 =  DB::table('entrada')
        ->where('unidade_id',$request->unidade_id)
        ->select('kit_3')
        ->sum('kit_3');
        if($request->nome_kit ==1){
            $retirar = 'kit_1';
            $aluno = ($kit - 1);
            if($aluno >10){
                $produto->update($form_data);
            }else{
                return response()->json(['errors' => 'Estoque esta baixo para kit 1']);
            }
        }elseif($request->nome_kit ==2){
            $retirar = 'kit_2';
            $aluno = ($kit2 - 1);
            if($aluno >10){
                $produto->update($form_data);
            }else{
                return response()->json(['errors' => 'Estoque Baixo para o kit 2']);
            }
        }else{
            $retirar = 'kit_3';
            $aluno = ($kit3 - 1);
            if($aluno >10){
                $produto->update($form_data);
            }else{
                return response()->json(['errors' => 'Estoque Baixo para o kit 3']);
            }
        }
        $form_data_baixa = array(
            $retirar =>  $aluno,
        );
        
        $condicao = ['unidade_id' => $request->unidade_id, 'empresa_id' => $request->empresa_id];
        Entrada::where($condicao)->update($form_data_baixa);
        
        return response()->json(['success' => 'Material Liberado com Sucesso']);
    }
}