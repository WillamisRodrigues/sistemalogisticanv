<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Empresa;

class LancamentoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $id = auth()->user()->empresa_id;
        $empresas = DB::table('empresas')
        ->select('empresas.*')
        ->where('id', $id)
        ->get();
        return view('lancamentos.index', compact('empresas'));
    }

    public function store(Request $req){
        dd($req);
    }
}
