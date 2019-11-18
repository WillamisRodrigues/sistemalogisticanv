<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Nivel;
use App\Empresa;
use DB;
use Illuminate\Support\Facades\Validator;
use Yajra\Datatables\Datatables;


class UsuarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $niveis = Nivel::all();
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
        
        return view('usuario.index',compact('niveis','empresas','unidades'));
    }

    public function lista_usuarios(){
        $usuarios = DB::table('users')
        ->join('niveis', 'niveis.id', '=', 'users.nivel')
        ->join('empresas', 'empresas.id', '=', 'users.empresa_id')
        ->select('users.*', 'niveis.tipo','empresas.nome_empresa')
        ->where('users.deleted_at',null)
        ->get();

        return Datatables::of($usuarios)
        ->addColumn('action', function ($usuarios) {
            $button = '<button type="button" name="edit_usuario" id="'.$usuarios->id.'" class="edit_usuario btn btn-warning btn-md"> <i class="fa fa-pencil"></i> Editar </button>';
            $button .= '&nbsp;&nbsp;';
            $button .= '<button type="button" name="delete_usuario" id="'.$usuarios->id.'" class="delete_usuario btn btn-danger btn-md"><i class="fa fa-trash"></i> Delete</button>';
            
            return $button;
        })
        ->make(true);
    }

    public function edit($id)
    {
        if(request()->ajax())
        {
            $data = User::findOrFail($id);
            return response()->json(['data' => $data]);
        }
    }

    public function store(Request $request){
        $rules = array(
            'nome_usuario'    =>  'required',
            'email' => 'required|unique:users',
            'password'    =>  'required|min:6',
        );

        $error = Validator::make($request->all(), $rules);
        if($error->fails())
        {
            return response()->json(['errors' => $error->errors()->all()]);
        }
            $form_data = array(
                'name' =>  $request->nome_usuario,
                'email' =>  $request->email,
                'nivel' =>  $request->nivel,
                'empresa_id' => $request->empresa,
                'password' => Hash::make($request->password),
            );

            User::create($form_data);
    
            return response()->json(['success' => 'Usuário Adicionado com Sucesso.']);
    }

    public function update(Request $request)
        {
        
            $rules = array(
                'nome_usuario'    =>  'required',
                'email' => 'required',
                'password'    =>  'required|min:6',
            );
    
                $error = Validator::make($request->all(), $rules);
    
                if($error->fails())
                {
                    return response()->json(['errors' => $error->errors()->all()]);
                }
    
            $form_data = array(
                'name' =>  $request->nome_usuario,
                'email' =>  $request->email,
                'nivel' =>  $request->nivel,
                'password' => Hash::make($request->password),
            );

            User::whereId($request->hidden_id)->update($form_data);
    
            return response()->json(['success' => 'Usuário Atualizado com Sucesso']);
        }
    
        public function destroy($id)
        {
            $data = User::findOrFail($id);
            $data->delete();
        }
}