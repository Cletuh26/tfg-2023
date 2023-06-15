<?php

namespace App\Http\Controllers;

use App\Models\UsuarioModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegistroController extends Controller
{
    public function verFormulario(): View
    {
        return view('registro');
    }

    public function procesarFormulario(Request $request)
    {
        // Validar los datos del formulario
        $request->validate([
            'dni' => 'required|unique:usuarios',
            'email' => 'required|email|unique:usuarios',
            'nick' => 'required|unique:usuarios',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
        ]);

        // Crear un nuevo registro en la base de datos
        $usuario = new UsuarioModel();
        $usuario->dni = $request->input('dni');
        $usuario->email = $request->input('email');
        $usuario->nick = $request->input('nick');
        $usuario->password = Hash::make($request->input('password'));
        $usuario->gestor_id = '1';
        $usuario->save();

        Auth::attempt(['email' => $request->email, 'password' => $request->password]);

        // Redirigir a una página de éxito o realizar alguna otra acción
        return redirect('/')->with('registro', '¡Te has registrado correctamente!');
    }
}
