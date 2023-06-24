<?php

namespace App\Http\Controllers;

use App\Models\EjercicioModel;
use App\Models\RutinaDefectoModel;
use App\Models\RutinaModel;
use App\Models\UsuarioModel;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class RutinaDefectoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuario = UsuarioModel::findOrFail(Auth::user()->id);
        $rutinasDefecto = RutinaDefectoModel::all();
        $rutinasPersonalizadas = $usuario->rutinas;

        return view('rutinas-defecto.index', ['rutinasDefecto' => $rutinasDefecto, 'rutinasPersonalizadas' => $rutinasPersonalizadas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $ejercicios = EjercicioModel::all();
        // $ejercicios = [];
        // Cambiar las rutas de las imagenes
        // dd($ejercicios);
        foreach ($ejercicios as $ejercicio) {
            $rutaImagenTmp = explode('/',$ejercicio['imagen']);
            $rutaImagenEjercicio = '';
            for ($i=3; $i <= (count($rutaImagenTmp)-1); $i++) {
                if($i == count($rutaImagenTmp)-1){
                    $rutaImagenEjercicio .= $rutaImagenTmp[$i];
                }else{
                    $rutaImagenEjercicio .= $rutaImagenTmp[$i] . "/";
                }
            }
            
            $ejercicio['imagen'] = $rutaImagenEjercicio;
        }

        if(count($ejercicios) == 0){
            $ejercicios = [];
        }

        return view('rutinas-defecto.create',['ejercicios' => $ejercicios]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'tipo' => 'required',
            'imagen' => 'max:512'
        ]);

        if($request['imagen'] == null || $request['imagen'] == "" || empty($request['imagen'])){
            $request['imagen'] = 'images/rutinas/defecto.jpeg';
        }else{
            $request['imagen'] = 'storage/app/public/images/rutinas/' . $request->imagen;
        }
        $request['usuario_id'] = Auth::user()->id;

        RutinaModel::create($request->all());
        return redirect('rutinas-defecto')->with('rutinaNueva', 'Rutina creada correctamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $rutinaD = RutinaDefectoModel::find($id);

        return view('rutinas-defecto.show', ['rutinaD' => $rutinaD]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
    public function destroy(string $id)
    {
        //
    }
}
