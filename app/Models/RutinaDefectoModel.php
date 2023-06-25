<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class RutinaDefectoModel extends Model
{
    use HasFactory;

    protected $table = "rutinas_defecto";

    public function usuarios(): BelongsToMany
    {
        return $this->belongsToMany(UsuarioModel::class,'rutinas_defecto_usuarios', 'rutina_defecto_id', 'usuario_id')
        ->withPivot('usuario_id', 'rutina_defecto_id');
    }

    public function ejercicios(): BelongsToMany
    {
        return $this->belongsToMany(EjercicioModel::class,'rutinas_defecto_ejercicios', 'rutina_defecto_id', 'ejercicio_id');
    }
}
