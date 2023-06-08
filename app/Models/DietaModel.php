<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class DietaModel extends Model
{
    use HasFactory;

    protected $table = "dietas";

    public function usuario(): BelongsTo
    {
        return $this->belongsTo(UsuarioModel::class);
    }

    public function alimentos(): BelongsToMany
    {
        return $this->belongsToMany(AlimentoModel::class, 'dietas_alimentos');
    }
}
