<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class LogueoController extends Controller
{
    public function verLogin(): View
    {
        return view('login');
    }

    public function procesarLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if(Auth::attempt($credentials))
        {
            $request->session()->regenerate();
            return redirect('/')
                ->withSuccess('Has iniciado sesión correctamente');
        }

        return back()->withErrors([
            'credenciales' => 'Email o contraseña no válido.',
        ])->onlyInput('email');
    }
}
