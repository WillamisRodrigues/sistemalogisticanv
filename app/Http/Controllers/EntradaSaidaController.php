<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntradaSaidaController extends Controller
{
    public function index(){
        return view('entrada_saida.index');
    }
}
