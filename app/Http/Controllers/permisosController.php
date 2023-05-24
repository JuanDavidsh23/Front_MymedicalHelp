<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class permisosController extends Controller
{
    public function get_permisos(){
      $response = Http::get('http://127.0.0.1:8000/api/permiso');
      $data = $response->json();
      return view('permisos',compact('data'));

        }
    public function create(){
      return view('Regpermisos');
    }

    public function store (Request $request){
      $response = Http::post('http://127.0.0.1:8000/api/permisos/insert', [
        'descripcion' => $request ->descripcion,

    ]);
      return redirect()->route('permisos.index');
    }

    public function delete($iduser){
      $response = Http::delete('http://127.0.0.1:8000/api/permisos/delete/'.$iduser);
      return redirect()->route('permisos.index');
      
    }
}
