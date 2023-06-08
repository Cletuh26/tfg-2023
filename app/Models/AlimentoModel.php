<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class AlimentoModel extends Model
{
    use HasFactory;

    protected $table = "alimentos";

    public function alimentos(): BelongsToMany
    {
        return $this->belongsToMany(DietaModel::class, 'dietas_alimentos');
    }
}
