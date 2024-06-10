<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    public function personas(): BelongsToMany
    {
        return $this->belongsToMany(Persona::class, 'cursopersona', 'id_curso', 'id_persona')->withPivot('calificacion', 'codigo');
    }

    public function getRouteKeyName()
    {
        return 'id_curso';
    }

    protected $table = 'curso';
    protected $primaryKey = 'id_curso';
}
