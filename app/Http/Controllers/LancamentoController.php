<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LancamentoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('lancamentos.index');
    }

    public function store(Request $req){
        dd($req);
    }
}
