<?php

namespace Src\Gestor;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Src\Usuario\Usuario;

class Gestor extends Model
{
    use HasFactory;

    protected $table = 'gestores';

    public function usuarios(): HasMany
    {
        return $this->hasMany(Usuario::class,);
    }
}
