<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Crud\EquipoController;
use App\Http\Controllers\Crud\JugadorController;

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

/*EQUIPOS*/
Route::get('/equipos',[EquipoController::class,"inicio"])->name('equipos.inicio');
Route::get('/crear/equipo',[EquipoController::class,"show"])->name('formulario.crear');
Route::post('/createe',[EquipoController::class,"create"])->name('crear.equipo');
Route::get('/editar/{id}', [EquipoController::class, 'editarurl'])->where('id','[0-9]+')->name('editar.equipo');
Route::put('/actualizar/{id}', [EquipoController::class, 'actualizar'])->where('id','[0-9]+')->name('formulario.editar');
Route::delete('/eliminar/{id}', [EquipoController::class, 'eliminar'])->where('id','[0-9]+')->name('eliminar.equipo');
Route::get('/ver/jugadores/{id}',[EquipoController::class,"jugadoresCiertoEquipos"])->name('ver.jugadoresEquipos');
Route::get('/crear/jugadorequipo/{id}',[EquipoController::class,"EquipoJugador"])->name('formulario.equipoJugador');
Route::put('/crear/crearequipojugador/{id}',[EquipoController::class,"crearEquipoJugador"])->name('formulario.JugadorEquipo');;

Route::get('/modal',[EquipoController::class,"modal"]);

/*JUGADORES*/
Route::get('/jugadores',[JugadorController::class,"inicio"])->name('ver.jugadores');
Route::get('/crear/jugador',[JugadorController::class,"crearJugadorFormulario"])->name('formulario.crearJ');
Route::post('/create',[JugadorController::class,"createJ"])->name('crear.jugador');
Route::get('/editarJ/{id}', [JugadorController::class, 'editarurlj'])->where('id','[0-9]+')->name('editar.jugador');
Route::put('/actualizarJ/{id}', [JugadorController::class, 'actualizar'])->where('id','[0-9]+')->name('formulario.editarj');
Route::delete('/eliminarJ/{id}', [JugadorController::class, 'eliminar'])->where('id','[0-9]+')->name('eliminar.jugador');



///
//esta bien
//Route::get('/crear/jugadorequipo/{id}',[JugadorController::class,"jugadoresEquipos"]);


//Route::get('/ver/jugadoresciertoequipo/{id}',[JugadorController::class,"jugadoresCiertoEquipos"])->name('ver.jugadores');


require __DIR__.'/auth.php';
