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
        $rutinasDefecto = RutinaDefectoModel::all();

        return view('rutinas-defecto.index', ['rutinasD' => $rutinasDefecto]);
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
