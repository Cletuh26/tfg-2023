<?php

namespace App\Http\Controllers;

use App\Models\EjercicioModel;
use App\Models\RutinaModel;
use App\Models\UsuarioModel;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class RutinaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuario = UsuarioModel::find(Auth::user()->id);
        $rutinas = $usuario->rutinas;

        return view('rutinas.index', ['rutinas' => $rutinas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ejercicios = EjercicioModel::all();

        return view('rutinas.create', ['ejercicios' => $ejercicios]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datosValidados = $request->validate([
            'nombre' => 'required'
        ]);

        $rutina = new RutinaModel();
        $rutina->nombre = $datosValidados['nombre'];
        $rutina->descripcion = $request['descripcion']??null;
        $rutina->tipo = $request['tipo'];
        $rutina->usuario_id = Auth::user()->id;

        // Obtener los ids de los checkbox marcados
        $ejerciciosSeleccionados = $request->input('ejerciciosSeleccionados', []);
        $ejerciciosMarcadosIds = json_decode($ejerciciosSeleccionados, true) ?? [];

        $rutina->save();

        foreach ($ejerciciosMarcadosIds as $ejercicioId) {
            // Buscamos el ejercicio
            $ejercicio = EjercicioModel::find($ejercicioId);

            // Verificar si se encontró el ejercicio
            if ($ejercicio) {
                // Ejemplo: Asociar el ejercicio a la dieta en la base de datos
                $rutina->ejercicios()->attach($ejercicio->id);
            }
        }

        // Redirigir a la página de detalles de la dieta con un mensaje de éxito
        return redirect()->route('rutinas.show', $rutina->id)->with('rutinaCreada', 'La rutina se ha creado correctamente.');
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
        $rutina = RutinaModel::findOrfail($id);

        return view('rutinas.edit', ['rutina' => $rutina]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $rutina = RutinaModel::findOrFail($id);

        $datosValidados = $request->validate([
            'nombre' => 'required',

        ]);

        $rutina->nombre = $datosValidados['nombre'];
        $rutina->descripcion = $request['descripcion']??null;
        $rutina->tipo = $request['tipo'];

        $rutina->save();

        return view('rutinas.show', ['rutina' => $rutina])->with('rutinaModificada', 'Rutina modificada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $usuario = UsuarioModel::findOrFail(Auth::user()->id);

        $rutina = RutinaModel::findOrFail($id);

        if ($rutina->usuario_id === $usuario->id) {

            // Eliminar los ejercicios relacionados
            $rutina->ejercicios()->detach();

            // Borramos la rutina del usuario
            $rutina->delete();

            //Redirijimos con exito
            return redirect()->route('rutinas.index')->with('rutinaBorrada', 'La rutina ha sido eliminada correctamente.');
        } else {
            //Redirijimos con errores
            return redirect()->route('rutinas.index')->with('rutinaError', 'No tienes permisos para eliminar esta rutina.');
        }
    }

    public function borrarEjercicio(Request $request, string $id)
    {
        $rutina = RutinaModel::findOrFail($request->rutina_id);

        // Obtener el ID del ejercicio a eliminar
        $ejercicioId = $id;

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
