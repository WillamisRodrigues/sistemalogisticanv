<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Kit;

class KitController extends Controller
{
    public function index(){
        return view('kit.index');
    }
    public function store(Request $info){
        $nome_kit = $info->input('nome_kit');
        $data = array('nome_kit'=>$nome_kit);

        $validator = Validator::make($info->all(), [
            'nome_kit' => 'required|unique:kits|max:255',
        ]);
        if ($validator->fails()) {
            $notification = array(
                'message' => 'Os Campos são obrigatórios',
                'alert-type' => 'warning'
            );
        }else{
            $inserir = DB::table('kits')->insert($data);
            
            if($inserir){
                $notification = array(
                    'message' => 'Kit Cadastrado com sucesso',
                    'alert-type' => 'success'
                );
            }else{
                $notification = array(
                    'message' => 'Opss! houve um erro ao cadastrar. favor comunicar ap T.I.',
                    'alert-type' => 'danger'
                );
            }
        }
        
        return back()->with($notification);
    }
}
