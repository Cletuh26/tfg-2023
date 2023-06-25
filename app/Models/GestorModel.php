<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class GestorModel extends Model
{
    use HasFactory;

    protected $table = "gestores";
    protected $fillable = ['nick', 'contrasenya'];
    protected $hidden = ['contrasenya'];

    public function usuarios(): HasMany
    {
        return $this->hasMany(UsuarioModel::class);
    }
}
