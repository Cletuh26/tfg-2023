<?php

namespace App\Http\Controllers;

use App\Models\AlimentoModel;
use App\Models\DietaModel;
use App\Models\UsuarioModel;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

use function PHPSTORM_META\type;

class DietaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $idUsuario = Auth::user()->id;

        $usuario = UsuarioModel::find($idUsuario);

        $dietasUsuario = $usuario->dietas;

        return view('dietas.index', ['dietas' => $dietasUsuario]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $alimentos = AlimentoModel::all();

        return view('dietas.create', ['alimentos' => $alimentos]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datosValidados = $request->validate([
            'nombre' => 'required',
            'descripcion' => 'required'
        ]);

        // Obtener los ids de los checkbox marcados
        $alimentosSeleccionados = $request->input('alimentosSeleccionados', []);
        $alimentosMarcadosIds = json_decode($alimentosSeleccionados, true) ?? [];

        // Verificar si se seleccionó al menos un alimento
        $validator = Validator::make($request->all(), [
            'alimentosSeleccionados' => [
                'required',
                function ($attribute, $value, $fail) use ($alimentosMarcadosIds) {
                    if (empty($alimentosMarcadosIds)) {
                        $fail('Debe seleccionar al menos un alimento.');
                    }
                },
            ],
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $dieta = new DietaModel();
        $dieta->nombre = $datosValidados['nombre'];
        $dieta->descripcion = $datosValidados['descripcion'];
        $dieta->usuario_id = Auth::user()->id;

        $dieta->save();

        foreach ($alimentosMarcadosIds as $alimentoId) {
            // Buscamos el alimento
            $alimento = AlimentoModel::find($alimentoId);

            // Verificar si se encontró el alimento
            if ($alimento) {
                // Ejemplo: Asociar el alimento a la dieta en la base de datos
                $dieta->alimentos()->attach($alimento->id);
            }
        }

        // Redirigir a la página de detalles de la dieta con un mensaje de éxito
        return redirect()->route('dietas.show', $dieta->id)->with('dietaCreada', 'La dieta se ha creado correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $dieta = DietaModel::findOrFail($id);

        return view('dietas.show', ['dieta' => $dieta]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request, string $id)
    {
        $dieta = DietaModel::findOrFail($id);

        return view('dietas.edit', ['dieta' => $dieta]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $dieta = DietaModel::findOrFail($id);

        $dieta->nombre = $request['nombre'] ?? null;
        $dieta->descripcion = $request['descripcion'] ?? null;
        $dieta->tipo = $request['tipo'];

        $dieta->save();

        return view('dietas.show', ['dieta' => $dieta])->with('dietaModificada', 'Dieta modificada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $usuario = UsuarioModel::findOrFail(Auth::user()->id);

        $dieta = DietaModel::findOrFail($id);

        if ($dieta->usuario_id === $usuario->id) {

            // Eliminar los alimentos relacionados
            $dieta->alimentos()->detach();

            // Borramos la dieta del usuario
            $dieta->delete();

            //Redirijimos con exito
            return redirect()->route('dietas.index')->with('dietaBorrada', 'La dieta ha sido eliminada correctamente.');
        } else {
            //Redirijimos con errores
            return redirect()->route('dietas.index')->with('dietaError', 'No tienes permisos para eliminar esta dieta.');
        }
    }

    public function borrarAlimento(Request $request, string $id)
    {
        $dieta = DietaModel::findOrFail($request->dieta_id);

        // Obtener el ID del alimento a eliminar
        $alimentoId = $id;

        // Eliminar la relación entre la dieta y el alimento
        $dieta->alimentos()->detach($alimentoId);

        // Comprobar si no quedan más alimentos en la dieta
        if ($dieta->alimentos->isEmpty()) {
            // Si no quedan más alimentos, eliminar la dieta
            $dieta->delete();

            // Opcionalmente, puedes redirigir a una página o realizar otras acciones
            return redirect()->route('dietas.index')->with('dietaBorrada', 'La dieta se ha borrado al no tener alimentos.');
        } else {
            return redirect()->route('dietas.edit', $dieta->id)->with('alimentoBorrado', 'Alimento eliminado de la dieta.');
        }
    }
}
