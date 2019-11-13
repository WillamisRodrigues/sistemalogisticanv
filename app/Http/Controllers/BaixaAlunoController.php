<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Validator;
use App\Empresa;
use App\AlunoImugi;
use App\KitImugi;

class BaixaAlunoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        $id = auth()->user()->empresa_id;
        $empresas = DB::table('empresas')
        ->select('empresas.*')
        ->where('id', $id)
        ->get();

        $kits = DB::table('kits')
        ->select('kits.id','nome_kit')
        ->where('empresa_id', $id)
        ->get();

        return view('baixa.index',compact('empresas','kits'));
    }
    public function alunosImugi(){
        $alunosImugi = DB::table('logistica.kits as kits')
        ->rightJoin('alunos_imugi.alunosimugi as codigo', 'kits.id', '=', 'codigo.nivel')
        ->join('alunos_imugi.turmas as turmas', 'turmas.matricula', '=', 'codigo.matricula')
        ->select('codigo.idCod', 'codigo.codUnidade','codigo.nivel','codigo.matricula','codigo.unidade',
        'codigo.curso', 'turmas.nome','kits.nome_kit')
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
            $data = AlunoImugi::findOrFail($id);
            return response()->json(['data' => $data]);
        }
    }

    public function update(Request $request)
    {
    
        $form_data = array(
            'nivel' =>  $request->nome_kit,
        );

        $produto = AlunoImugi::find($request->hidden_id);
        $produto->update($form_data);
        
        return response()->json(['success' => 'Material Liberado com Sucesso']);
    }
}
