<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Persona extends Model
{
    use HasFactory;

    public function curso(): BelongsToMany
    {
        return $this->belongsToMany(Curso::class, 'cursopersona', 'id_persona', 'id_curso')->withPivot('calificacion', 'codigo');
    }

    public function getRouteKeyName()
    {
        return 'id_persona';
    }

    protected $table = 'persona';
    protected $primaryKey = 'id_persona';
}
