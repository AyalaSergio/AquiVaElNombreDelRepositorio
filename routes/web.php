<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usuarioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/formularioUsuario', function(){
    return view('formulario_usuario');
});

Route::post("guardarUsuario", [usuarioController::class, "insertar"])->name("usuario.insertar");
Route::get("usuarios", [usuarioController::class, "mostrar"])->name("usuario.mostrar");
Route::get("editarUsuario/{id}", [usuarioController::class, "editar"])->name("usuario.editar");
Route::put("actualizarUsuario/{id}", [usuarioController::class, "actualizar"])->name("usuario.actualizar");
Route::delete("eliminarUsuario/{id}", [usuarioController::class, "eliminar"])->name("usuario.eliminar");
Route::get("bajaUsuario/{id}", [usuarioController::class, "baja"])->name("usuario.baja");
