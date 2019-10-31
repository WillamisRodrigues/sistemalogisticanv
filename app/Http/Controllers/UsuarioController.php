<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;


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
}