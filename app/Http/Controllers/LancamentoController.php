<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LancamentoController extends Controller
{
    public function index()
    {
        return view('lancamentos.index');
    }

    public function store(Request $req){
        dd($req);
    }
}
