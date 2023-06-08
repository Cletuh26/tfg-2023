<?php

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
});

Route::get('/login', function(){
    return view('login');
});

Route::get('/rutinas', function(){
    return view('rutinas.index');
});

Route::get('/dietas', function(){
    return view('dietas.index');
});

Route::get('/ejercicios', function(){
    return view('ejercicios.index');
});