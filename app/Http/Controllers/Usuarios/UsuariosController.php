<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Usuario;
use App\Http\Requests\StoreUsuario;
use App\Http\Requests\Usuarios;

class UsuariosController extends Controller
{
    public function _construct (Usuario $usuario){
        $this->usuario=$usuario;
    }
    
    public function store(Usuarios $request){
        $campos=$request->all();
        $usuario= Usuario::create($campos);
        return($usuario->toJson());
        //$usuario= $this->usuario->create($request->all());
        //return $usuario;
        //return response()->json(new Usuario(), 201);
    }
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

    public function destroy($usuario){
        $usuario->delete();
    }
}
