<?php

namespace App\Http\Controllers;

use App\Models\UsuarioModel;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

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
    public function show(Request $request)
    {
        $usuario = UsuarioModel::findOrFail($request->id);

        return view('usuarios.show', ['usuario' => $usuario]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request)
    {
        $usuario = UsuarioModel::findOrFail($request->id);

        return view('usuarios.edit', ['usuario' => $usuario]);
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
        }

        $usuario->save();

        return view('usuarios.show', ['id' => $idUsuario, 'usuario' => $usuario])->with('success','Cambios guardados correctamente');
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
