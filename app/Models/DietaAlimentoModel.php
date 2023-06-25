<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DietaAlimentoModel extends Model
{
    use HasFactory;

    protected $table = "dietas_alimentos";

    public function dieta(): BelongsTo
    {
        return $this->belongsTo(DietaModel::class, 'dieta_id');
    }

    public function alimento(): BelongsTo
    {
        return $this->belongsTo(AlimentoModel::class, 'alimento_id');
    }
}
