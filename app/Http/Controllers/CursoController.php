<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Validator;
use App\Empresa;
use App\Curso;

class CursoController extends Controller
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

        return view('curso.index',compact('empresas','unidades'));
    }

    public function edit($id)
    {
        if(request()->ajax())
        {
            $data = Curso::findOrFail($id);
            return response()->json(['data' => $data]);
        }
    }

    public function lista_cursos(){
        $cursos = DB::table('cursos')
        ->join('empresas', 'empresas.id', '=', 'cursos.empresa_id')
        ->select('cursos.*', 'empresas.nome_empresa')
        ->get();

        return Datatables::of($cursos)
        ->addColumn('action', function ($curso) {
            if(auth()->user()->nivel != 2){
                $button = "Você precisa do perfil Master";
            }else{
                $button = '<button type="button" name="edit_curso" id="'.$curso->id.'" class="edit_curso btn btn-warning btn-md"> <i class="fa fa-pencil"></i> Editar </button>';
                $button .= '&nbsp;&nbsp;';
                $button .= '<button type="button" name="delete_curso" id="'.$curso->id.'" class="delete_curso btn btn-danger btn-md"><i class="fa fa-trash"></i> Delete</button>';
            }
                return $button;
        })
        ->make(true);
    }

    public function store(Request $request){
        $rules = array(
            'nome_curso' =>  'required'
        );

        $error = Validator::make($request->all(), $rules);

        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }
            $form_data = array(
                'nome_curso' =>  $request->nome_curso,
                'empresa_id' => $request->nome_empresa
            );
    
            Curso::create($form_data);
    
            return response()->json(['success' => 'Curso Adicionado com Sucesso.']);
        }
        public function update(Request $request)
        {
        
            $rules = array(
                'nome_curso' =>  'required',
            );
    
                $error = Validator::make($request->all(), $rules);
    
                if($error->fails())
                {
                    return response()->json(['errors' => $error->errors()->all()]);
                }
    
            $form_data = array(
                'nome_curso' =>  $request->nome_curso,
                'empresa_id' => $request->nome_empresa
            );

            Curso::whereId($request->hidden_id)->update($form_data);
    
            return response()->json(['success' => 'Curso Atualizado com Sucesso']);
        }
        public function destroy($id)
        {
            $data = Curso::findOrFail($id);
            $data->delete();
        }
    
}
