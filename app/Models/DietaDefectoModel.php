<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DietaDefectoModel extends Model
{
    use HasFactory;

    protected $table = "dieta_defecto";

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(UsuarioModel::class);
    }
}
