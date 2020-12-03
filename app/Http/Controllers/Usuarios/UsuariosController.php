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
        $usuario= Users::create($campos);
        return($usuario->toJson());
        //$usuario= $this->usuario->create($request->all());
        //return $usuario;
        //return response()->json(new Usuario(), 201);
    }
    public function index(){
        $usuarios = Users::all();
        return $usuarios;
        return view('Users.index');
    }
    public function create(){
        return view('Users.create');

    }
    public function show($id){

        $usuario = Users::find($id);
        return $usuario;

        return view('Users.show',compact('user'));

    }

    public function destroy($user){
        $user->delete();
    }
}
