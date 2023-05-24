<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class pacienteController extends Controller
{
    public function get_paciente(){
      $response = Http::get('http://127.0.0.1:8000/api/Pacientes');
      $data = $response->json();
      return view('paciente',compact('data'));

        }

    public function create(){
      return view('user');
    }

    public function store (Request $request){
      $response = Http::post('http://127.0.0.1:8000/api/Pacientes/insert', [
        'nombre' => $request ->nombre,
        'apellido' => $request ->apellido,
        'correo' => $request ->correo,
        'telefono' => $request ->telefono,
        'ciudad' => $request ->ciudad,
        'direccion' => $request ->direccion,
        'departamento' => $request ->departamento,
        'cedula' => $request ->cedula,
        'zona' => $request ->zona,
        'id_rol' => $request ->id_rol,


    ]);
      return redirect()->route('Regpaciente.index');
    }

    public function delete($iduser){
      $response = Http::delete('http://127.0.0.1:8000/api/Pacientes/delete/'.$iduser);
      return redirect()->route('paciente.index');
      
    }
}
