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
    return view('welcome');
})->name('inicio');

Route::get('login', [LogueoController::class, 'verLogin'])->name('login');
Route::post('login', [LogueoController::class, 'procesarLogin'])->name('loginProcesado');

Route::get('registro', [RegistroController::class, 'verFormulario'])->name('registro');
Route::post('registro', [RegistroController::class, 'procesarFormulario'])->name('registroProcesado');

Route::resource('usuarios', UsuarioController::class);
Route::resource('rutinas', RutinaController::class);
Route::resource('dietas', DietaController::class);
Route::resource('ejercicios', EjercicioController::class);