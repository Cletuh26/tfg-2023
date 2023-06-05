<?php

namespace Src\Usuario;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Usuario extends Model
{
    use HasFactory;

    protected $table = 'usuarios';

    public function gestor(): BelongsTo
    {
        return $this->belongsTo(Gestor::class);
    }
}
