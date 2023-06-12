<?php

use App\Http\Controllers\DietaController;
use App\Http\Controllers\EjercicioController;
use App\Http\Controllers\RutinaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\AuthController;
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

Route::get('/login', function(){
    return view('login');
})->name('login');

Route::get('registro',function(){
    return view('registro');
})->name('registro');

Route::resource('usuarios', UsuarioController::class);
Route::resource('rutinas', RutinaController::class);
Route::resource('dietas', DietaController::class);
Route::resource('ejercicios', EjercicioController::class);