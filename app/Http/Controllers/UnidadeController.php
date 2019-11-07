<?php
namespace App\Http\Controllers;
use DB;
use App\Empresa;

use Illuminate\Http\Request;

class UnidadeController extends Controller
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
        return view('unidade.index',compact('empresas'));
    }
}
