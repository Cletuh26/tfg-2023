<?php

namespace App\Http\Controllers;

use App\Models\RutinaModel;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class RutinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('rutinas.create');
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
        $rutina = RutinaModel::find($id);

        return view('rutinas.show', ['rutina' => $rutina]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $rutina = RutinaModel::find($id);

        $numeroEjercicios = $rutina->ejercicios->count();
        $ejerciciosRutina = $rutina->ejercicios;

        return view('rutinas.edit', ['rutina' => $rutina, 'numeroEjercicios' => $numeroEjercicios, 'ejerciciosRutina' => $ejerciciosRutina]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {

    }

    public function borrarEjercicio(Request $request, string $id)
    {
        $rutina = RutinaModel::findOrFail($id);

        // Obtener el ID del ejercicio a eliminar
        $ejercicioId = $request->input('ejercicio_id');

        // Eliminar la relación entre la rutina y el ejercicio
        $rutina->ejercicios()->detach($ejercicioId);

        // Comprobar si no quedan más ejercicios en la rutina
        if ($rutina->ejercicios->isEmpty()) {
            // Si no quedan más ejercicios, eliminar la rutina
            $rutina->delete();
            // Opcionalmente, puedes redirigir a una página o realizar otras acciones

            return redirect()->route('rutinas.index')->with('rutinaBorrada', 'La rutina se ha borrado al no tener más ejercicios.');
        }else{
            return redirect()->route('rutinas.edit', $rutina->id)->with('ejercicioBorrado', 'Ejercicio eliminado de la rutina.');
        }
    }
}
