<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RutinaEjercicioModel extends Model
{
    use HasFactory;

    protected $table = "rutinas_ejercicios";

    public function rutina(): BelongsTo
    {
        return $this->belongsTo(RutinaModel::class, 'rutina_id');
    }

    public function ejercicio(): BelongsTo
    {
        return $this->belongsTo(EjercicioModel::class, 'ejercicio_id');
    }
}
