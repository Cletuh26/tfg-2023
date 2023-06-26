<?php

namespace App\Http\Controllers;

use App\Models\UsuarioModel;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuarios = UsuarioModel::all();
        return view('usuarios.index', ['usuarios' => $usuarios]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $usuario = UsuarioModel::findOrFail($id);

        return view('usuarios.show', ['usuario' => $usuario]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id)
    {
        $usuario = UsuarioModel::findOrFail($id);

        return view('usuarios.edit', ['usuario' => $usuario]);
    }

    public function editPass(string $id)
    {
        $usuario = UsuarioModel::findOrFail($id);

        return view('usuarios.editPass', ['usuario' => $usuario]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $idUsuario = $id;

        $datosNuevos = $request->validate([
            'nombre' => 'nullable',
            'apellidos' => 'nullable',
            'email' => 'required|unique:usuarios,email,'.$idUsuario,
            'telefono' => 'nullable',
            'fecha_nacimiento' => 'nullable',
            'peso' => 'nullable|max:400',
            'altura' => 'nullable|numeric|min:0|max:300'
        ]);

        $usuario = UsuarioModel::findOrFail($idUsuario);
        $usuario->nombre = $datosNuevos['nombre']??null;
        $usuario->apellidos = $datosNuevos['apellidos']??null;
        $usuario->email = $datosNuevos['email'];
        $usuario->telefono = $datosNuevos['telefono']??null;
        $usuario->fecha_nacimiento = $datosNuevos['fecha_nacimiento']??null;
        $usuario->peso = $datosNuevos['peso']??null;
        $usuario->altura = $datosNuevos['altura']??null;
        
        // Si introducen o modifican peso y altura, que se calcule el IMC
        if(!is_null($usuario->peso) && !is_null($usuario->altura)){
            if(is_numeric($usuario->peso) && is_numeric($usuario->altura)){
                $usuario->imc = $this->calcularImc($usuario->peso, $usuario->altura);
            }
        }else{
            $usuario->imc = null;
        }

        $usuario->save();

        return view('usuarios.show', ['id' => $idUsuario, 'usuario' => $usuario])->with('editado_correcto','Cambios guardados correctamente');
    }

    public function updatePass(Request $request, string $id)
    {
        $idUsuario = $id;

        // Validamos los campos que ha escrito el usuario
        $datosNuevos = $request->validate([
            'password' => [
                'required',
                function ($attribute, $value, $fail) {
                    if (!Hash::check($value, Auth::user()->password)) {
                        $fail('La contraseña actual no coincide.');
                    }
                },
            ],
            'password_new' => 'required|confirmed',
            'password_new_confirmation' => 'required'
        ]);

        // Guardamos los cambios en la base de datos
        $usuario = UsuarioModel::findOrFail($idUsuario);
        $usuario->password = Hash::make($datosNuevos['password_new']);
        $usuario->save();

        // Cerramos la sesión del usuario porque ha modificado la contraseña
        Auth::logout();

        return redirect('login')->with('password_reset','Contraseña cambiada correctamente. Por favor, inicia sesión nuevamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    private function calcularImc(int $peso, int $altura): int
    {
        $alturaDec = $altura / 100;
        $altura2 = $alturaDec * $alturaDec;

        $imc = round($peso / ($altura2),2);

        return $imc;
    }
}
