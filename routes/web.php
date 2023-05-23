<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\Http\Controllers\usuariosController;

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
Route::get('/',[usuariosController::class,'index',])->name('usuarios.index');
Route::get('/usuario',[usuariosController::class,'create']);
Route::post('/usuario',[UsuariosController::class,'store'])->name('usuarios.store');
Route::get('/usuario/delete/{id}',[UsuariosController::class,'delete'])->name('usuarios.delete');

