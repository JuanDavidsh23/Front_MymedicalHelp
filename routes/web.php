<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\usuariosController;
use App\Http\Controllers\RolsController;
use App\Http\Controllers\pacienteController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//USUARIOS
Route::get('/',[usuariosController::class,'index',])->name('usuarios.index');
Route::get('/usuario',[usuariosController::class,'create']);
Route::post('/usuario',[UsuariosController::class,'store'])->name('usuarios.store');
Route::get('/usuario/delete/{id}',[UsuariosController::class,'delete'])->name('usuarios.delete');

//ROLES
Route::get('/roles',[RolsController::class,'getroles',])->name('roles.index');
Route::get('/Regrol',[RolsController::class,'create']);
Route::post('/Regrol',[RolsController::class,'store'])->name('roles.store');
Route::get('/rol/delete/{id}',[RolsController::class,'deleterol'])->name('roles.delete');

//PERMISOS
Route::get('/permisos',[permisosController::class,'get_permisos',])->name('permisos.index');
Route::get('/Regpermiso',[permisosController::class,'create']);
Route::post('/Regpermiso',[permisosController::class,'store'])->name('permisos.store');
Route::get('/permisos/delete/{id}',[permisosController::class,'delete'])->name('permisos.delete');

//PACIENTE
Route::get('/paciente',[pacienteController::class,'get_paciente',])->name('paciente.index');
Route::get('/Regpaciente',[pacienteController::class,'create']);
Route::post('/Regpaciente',[pacienteController::class,'store'])->name('paciente.store');
Route::get('/paciente/delete/{id}',[pacienteController::class,'delete'])->name('paciente.delete');