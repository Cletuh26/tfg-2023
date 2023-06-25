<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RutinaDefectoUsuarioModel extends Model
{
    use HasFactory;

    protected $table = "rutinas_defecto_usuarios";

    public function rutinaDefecto(): BelongsTo
    {
        return $this->belongsTo(RutinaDefectoModel::class, 'rutina_defecto_id');
    }

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(UsuarioModel::class, 'usuario_id');
    }
}
