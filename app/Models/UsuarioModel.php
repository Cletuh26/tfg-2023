<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class UsuarioModel extends Model
{
    use HasFactory;

    protected $table = "usuarios";
    protected $hidden = ['password'];
    protected $fillable = ['dni','email','telefono', 'nick', 'password', 'gestor_id'];

    public function gestor(): BelongsTo
    {
        return $this->belongsTo(GestorModel::class);
    }

    public function rutinasDefecto(): BelongsToMany
    {
        return $this->belongsToMany(RutinaDefectoModel::class, 'rutinas_defecto_usuarios', 'usuario_id', 'rutina_defecto_id')
        ->withPivot('usuario_id', 'rutina_defecto_id');
    }

    public function rutinas(): HasMany
    {
        return $this->hasMany(RutinaModel::class,'usuario_id','id');
    }

    public function dietas(): HasMany
    {
        return $this->hasMany(DietaModel::class,'usuario_id','id');
    }
}
