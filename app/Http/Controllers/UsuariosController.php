<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;

class UsuariosController extends Controller
{
    public function index(){
        $usuarios = Usuario::all();
        return $usuarios;
        return view('Usuarios.index');
    }
    public function create(){
        return view('Usuarios.create');

    }
    public function show($id){

        $usuario = Usuario::find($id);
        return $usuario;

        return view('Usuarios.show',compact('usuario'));

    }
}
