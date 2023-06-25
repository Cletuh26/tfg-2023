<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class EjercicioModel extends Model
{
    use HasFactory;

    protected $table = "ejercicios";

    public function rutinas(): BelongsToMany
    {
        return $this->belongsToMany(RutinaModel::class, 'rutinas_ejercicios', 'ejercicio_id', 'rutina_id');
    }

    public function rutinasDefecto(): BelongsToMany
    {
        return $this->belongsToMany(RutinaDefectoModel::class,'rutinas_defecto_ejercicios', 'ejercicio_id', 'rutina_defecto_id');
    }
}
