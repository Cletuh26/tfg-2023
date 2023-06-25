<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RutinaDefectoEjercicioModel extends Model
{
    use HasFactory;

    protected $table = "rutinas_defecto_ejercicios";

    public function rutinaDefecto(): BelongsTo
    {
        return $this->belongsTo(RutinaDefectoModel::class, 'rutina_defecto_id');
    }

    public function ejercicio(): BelongsTo
    {
        return $this->belongsTo(EjercicioModel::class, 'ejercicio_id');
    }
}
