<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class usuariosController extends Controller
{
    public function index(){
      $response = Http::get('http://127.0.0.1:8000/api/usuarios');
      $data = $response->json();
      return view('usuarios',compact('data'));

        }
        public function roles(){
        $response = Http::get('http://127.0.0.1:8000/api/rol/');
        $rol = $response->json();
        return view('user',compact('rol'));
        }

    public function create(){
      return view('user');
    }

    public function store (Request $request){
      $response = Http::post('http://127.0.0.1:8000/api/usuarios/insert', [
        'nombre' => $request ->nombre,
        'apellido' => $request ->apellido,
        'telefono' => $request ->telefono,
        'correo' => $request ->correo,
        'clave' => $request ->clave,
        'direccion' => $request ->direccion,
        'ciudad' => $request ->ciudad,
        'departamento' => $request ->departamento,
        'cedula' => $request ->cedula,
        'zona' => $request ->zona,
        'id_rol' => $request ->id_rol,


    ]);
      return redirect()->route('usuarios.index');
    }

    public function delete($iduser){
      $response = Http::delete('http://127.0.0.1:8000/api/usuarios/delete/'.$iduser);
      return redirect()->route('usuarios.index');
      
    }
}
