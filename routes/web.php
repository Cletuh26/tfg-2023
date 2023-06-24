<?php

use App\Http\Controllers\DietaController;
use App\Http\Controllers\EjercicioController;
use App\Http\Controllers\LogueoController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\RutinaController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('index');
})->name('inicio');

Route::post('logout', [LogueoController::class, 'logout'])->name('logout');

Route::get('login', [LogueoController::class, 'verLogin'])->name('login');
Route::post('login', [LogueoController::class, 'procesarLogin'])->name('loginProcesado');

Route::get('registro', [RegistroController::class, 'verFormulario'])->name('registro');
Route::post('registro', [RegistroController::class, 'procesarFormulario'])->name('registroProcesado');

// Usuario
Route::get('usuarios/{id}', [UsuarioController::class, 'show'])->middleware('auth')->name('usuarios.show');
Route::post('usuarios/{id}/editar', [UsuarioController::class, 'edit'])->middleware('auth')->name('usuarios.edit');
Route::put('usuarios/{id}', [UsuarioController::class, 'update'])->middleware('auth')->name('usuarios.update');

// Apartado contraseñas
Route::match(['get', 'post'],'usuarios/{id}/editarPass', [UsuarioController::class, 'editPass'])->middleware('auth')->name('usuarios.editPass');
Route::put('usuarios/{id}/updatePass', [UsuarioController::class, 'updatePass'])->middleware('auth')->name('usuarios.updatePass');

// Rutinas
Route::get('rutinas/', [RutinaController::class, 'index'])->middleware('auth')->name('rutinas.index');
Route::get('rutinas/{id}', [RutinaController::class, 'show'])->middleware('auth')->name('rutinas.show');
Route::get('rutinas/create', [RutinaController::class, 'create'])->middleware('auth')->name('rutinas.create');
Route::post('rutinas/{id}/editar', [RutinaController::class, 'edit'])->middleware('auth')->name('rutinas.edit');
Route::put('rutinas/{id}', [RutinaController::class, 'update'])->middleware('auth')->name('rutinas.update');

Route::resource('dietas', DietaController::class)->middleware('auth');
Route::resource('ejercicios', EjercicioController::class)->middleware('auth');