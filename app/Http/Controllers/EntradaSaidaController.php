<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Yajra\Datatables\Datatables;
use DB;
use Illuminate\Http\Request;
use App\Empresa;
use App\Entrada;

class EntradaSaidaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
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

        return view('entrada_saida.index',compact('empresas','unidades'));
    }
    public function lista_entradas(){
          $kits = DB::Table('entrada')
            ->join('unidades', 'unidades.id', '=', 'entrada.unidade_id')
            ->select('unidades.nome_unidade','entrada.kit_1','entrada.kit_2','entrada.kit_3')
            ->get();

           
            return Datatables::of($kits)
            ->addColumn('unidade', function ($kits) {
                $button = $kits->nome_unidade;
                return $button;
            })->addColumn('kit1', function ($kits) {
                if($kits->kit_1 < 10){
                    $estoque = 'badge bgc-red-50 c-red-700 p-15 lh-0 tt-c badge-pill';
                }elseif($kits->kit_1 <=20){
                    $estoque = 'badge bgc-yellow-50 c-yellow-700 p-15 lh-0 tt-c badge-pill';
                }else{
                    $estoque = 'badge bgc-green-50 c-green-700 p-15 lh-0 tt-c badge-pill';
                }
            $button = '<span class="'.$estoque.'" style="font-size:14pt; width:100px;">'.$kits->kit_1.'</span>';
            return $button;
            })->addColumn('kit2', function($kits) {
                if($kits->kit_2 < 10){
                    $estoque = 'badge bgc-red-50 c-red-700 p-15 lh-0 tt-c badge-pill';
                }elseif($kits->kit_2 <=20){
                    $estoque = 'badge bgc-yellow-50 c-yellow-700 p-15 lh-0 tt-c badge-pill';
                }else{
                    $estoque = 'badge bgc-green-50 c-green-700 p-15 lh-0 tt-c badge-pill';
                }
                $button = '<span class="'.$estoque.'" style="font-size:14pt; width:100px;">'.$kits->kit_2.'</span>';
                return $button;
            })->addColumn('kit3', function($kits) {
                if($kits->kit_3 < 10){
                    $estoque = 'badge bgc-red-50 c-red-700 p-15 lh-0 tt-c badge-pill';
                }elseif($kits->kit_3 <=20){
                    $estoque = 'badge bgc-yellow-50 c-yellow-700 p-15 lh-0 tt-c badge-pill';
                }else{
                    $estoque = 'badge bgc-green-50 c-green-700 p-15 lh-0 tt-c badge-pill';
                }
                $button = '<span class="'.$estoque.'" style="font-size:14pt; width:100px;">'.$kits->kit_3.'</span>';
                return $button;
            })->rawColumns(['kit1', 'kit2','kit3'])
            ->make(true);
            
    
        }
}
