<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class UsuarioModel extends Model
{
    use HasFactory;

    protected $table = "usuarios";
    protected $hidden = ['contrasenya'];

    public function gestor(): BelongsTo
    {
        return $this->belongsTo(GestorModel::class);
    }

    public function rutinaDefecto(): HasOne
    {
        return $this->hasOne(RutinaDefectoModel::class);
    }
}
