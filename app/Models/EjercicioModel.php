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
        return $this->belongsToMany(Rutina::class, 'rutinas_ejercicios');
    }
}
