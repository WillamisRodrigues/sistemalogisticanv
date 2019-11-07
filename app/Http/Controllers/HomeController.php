<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Empresa;

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
        $empresas = DB::table('empresas')
        ->select('empresas.*')
        ->where('id', $id)
        ->get();

        return view('home.index',compact('empresas'));
    }
}
