<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class RolsController extends Controller
{
    public function getroles(){
        $response = Http::get('http://127.0.0.1:8000/api/rol/');
        $data = $response->json();
        return view('roles',compact('data'));
  
          }

      public function create(){
        return view('Regrol');
      }
  
      public function store (Request $request){
        $response = Http::post('http://127.0.0.1:8000/api/rol/insert', [
          'nombre_rol' => $request ->nombre_rol,
      ]);
        return redirect()->route('roles.index');
      }
  
      public function deleterol($iduser){
        $response = Http::delete('http://127.0.0.1:8000/api/rol/delete/'.$iduser);
        return redirect()->route('roles.index');
        
      }
}
