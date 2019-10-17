<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaixaAlunoController extends Controller
{
    public function index(){
        return view('baixa.index');
    }
}
