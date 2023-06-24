<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class RutinaModel extends Model
{
    use HasFactory;

    protected $table = "rutinas";
    protected $fillable = ['nombre','descripcion', 'tipo' , 'imagen', 'usuario_id'];

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(UsuarioModel::class);
    }

    public function ejercicios(): BelongsToMany
    {
        return $this->belongsToMany(EjercicioModel::class, 'rutinas_ejercicios', 'rutina_id', 'ejercicio_id');
    }
}
