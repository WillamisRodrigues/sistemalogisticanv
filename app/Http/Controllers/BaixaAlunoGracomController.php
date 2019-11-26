<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class BaixaAlunoGracomController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function alunosGracom(){
        $cod_sophia = Auth::user()->cod_sophia;
        $alunosgracom = DB::table('logistica.kits as kits')
        ->rightJoin('graco168_portaldoaluno.codigo as codigo', 'kits.id', '=', 'codigo.nivel')
        ->join('graco168_portaldoaluno.turmas as turmas', 'turmas.matricula', '=', 'codigo.matricula')
        ->where('codigo.codUnidade',$cod_sophia)
        ->select('codigo.idCod', 'codigo.codUnidade','codigo.nivel','codigo.matricula','codigo.unidade',
        'codigo.curso', 'turmas.nome','kits.nome_kit')
        ->get();

        return Datatables::of($alunosgracom)
        ->addColumn('action', function ($aluno) {
            $button = '<button type="button" name="edit_imugi" id="'.$aluno->idCod.'" class="edit_imugi btn btn-warning btn-md"> <i class="ti-book"></i> Baixa Material </button>';
            return $button;
        })
        ->make(true);
    }
}
