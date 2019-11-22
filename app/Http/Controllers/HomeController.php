<?php

namespace App\Http\Controllers;
use DB;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Empresa;
use App\AlunoImugi;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
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

        $total_alunosImugi = DB::table('imugi270_portaldoaluno.turmas as turma')
        ->join('imugi270_portaldoaluno.alunos_cadastro as cadastro', 
        'cadastro.matricula', '=', 'turma.matricula')
        ->select(DB::raw('count(*) as alunosAtivos'))
        ->count();

        $alunosAtivosProprias = DB::table('imugi270_portaldoaluno.turmas as turma')
        ->join('imugi270_portaldoaluno.alunos_cadastro as cadastro', 
        'cadastro.matricula', '=', 'turma.matricula')
        ->join('imugi270_portaldoaluno.unidades as unidades', 'cadastro.matricula','=','unidades.matricula')
        ->select(DB::raw('turma.unidade, count(*) as alunosAtivos'))
        ->where('tipo_unidade','=',0)
        ->groupBy('turma.unidade')
        ->count();

        $alunosAtivosFranquias = DB::table('imugi270_portaldoaluno.turmas as turma')
        ->join('imugi270_portaldoaluno.alunos_cadastro as cadastro', 
        'cadastro.matricula', '=', 'turma.matricula')
        ->join('imugi270_portaldoaluno.unidades as unidades', 'cadastro.matricula','=','unidades.matricula')
        ->select(DB::raw('turma.unidade, count(*) as alunosAtivos'))
        ->where('tipo_unidade','=',1)
        ->groupBy('turma.unidade')
        ->count();

        return view('home.index',compact('empresas','unidades','total_alunosImugi',
        'alunosAtivosProprias','alunosAtivosFranquias'));
    }

    public function alunos_ativos_imugi(){
        $alunosAtivos = DB::table('imugi270_portaldoaluno.turmas as turma')
        ->join('imugi270_portaldoaluno.alunos_cadastro as cadastro', 
        'cadastro.matricula', '=', 'turma.matricula')
        ->join('imugi270_portaldoaluno.unidades as matricula', 'cadastro.matricula','=','matricula.matricula')
        ->select(DB::raw('turma.unidade, count(*) as alunosAtivos'))
        ->orderBy('alunosAtivos', 'DESC')
        ->where('tipo_unidade','=',0)
        ->groupBy('turma.unidade')
        ->get();

           
            return Datatables::of($alunosAtivos)->make(true);
            
    }

    public function alunos_ativos_imugi_franquia(){
        $alunosAtivosFranquias = DB::table('imugi270_portaldoaluno.turmas as turma')
        ->join('imugi270_portaldoaluno.alunos_cadastro as cadastro', 
        'cadastro.matricula', '=', 'turma.matricula')
        ->join('imugi270_portaldoaluno.unidades as unidades', 'cadastro.matricula','=','unidades.matricula')
        ->select(DB::raw('turma.unidade, count(*) as alunosAtivos'))
        ->where('tipo_unidade','=',1)
        ->groupBy('turma.unidade')
        ->orderBy('alunosAtivos', 'DESC')
        ->get();

           
            return Datatables::of($alunosAtivosFranquias)->make(true);
            
    }
}
