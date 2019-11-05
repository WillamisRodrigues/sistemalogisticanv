<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Nivel;
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
        return view('usuario.index',compact('niveis'));
    }

    public function lista_usuarios(){
        $usuarios = DB::table('users')
        ->join('niveis', 'niveis.id', '=', 'users.nivel')
        ->select('users.*', 'niveis.tipo')
        ->get();

        return Datatables::of($usuarios)
        ->addColumn('action', function ($usuarios) {
            $button = '<button type="button" name="edit_usuario" id="'.$usuarios->id.'" class="edit_usuario btn btn-warning btn-md"> <i class="fa fa-pencil"></i> Editar </button>';
            $button .= '&nbsp;&nbsp;';
            $button .= '<button type="button" name="delete" id="'.$usuarios->id.'" class="delete_usuario btn btn-danger btn-md"><i class="fa fa-trash"></i> Delete</button>';
            
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
}