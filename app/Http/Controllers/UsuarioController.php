<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Redirect;

class UsuarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $usuarios = User::all();

        return view('usuario.index', compact('usuarios'));
    }

    public function create()
    {
        return view('usuario.insere');
    }

    public function store(Request $request)
    {
        $usuario = new User();
        $usuario->name = $request['nome'];
        $usuario->email = $request['email'];
        $usuario->password = $request['password'];
        $usuario->save();

        //return Redirect::back()->withErrors(['msg', 'The Message']);
        $usuarios = User::all();
        return view('usuario.index', compact('usuarios'));
    }

    public function edit($id)
    {
        $usuario = User::find($id);
        return view('usuario.edita', compact('usuario'));
    }

    public function update(Request $request, $id)
    {
        $usuario = User::find($id);
        $usuario->name = $request['nome'];
        $usuario->email = $request['email'];
        $usuario->password = $request['password'];
        $usuario->save();
        
        $usuarios = User::all();
        return view('usuario.index', compact('usuarios'));
    }

    public function delete($id)
    {
        $usuario = User::find($id);
        $usuario->delete();

        return redirect('/usuarios');
    }
}
