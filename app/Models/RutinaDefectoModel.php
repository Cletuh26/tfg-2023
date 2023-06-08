<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RutinaDefectoModel extends Model
{
    use HasFactory;

    protected $table = "rutina_defecto";

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(UsuarioModel::class);
    }
}
