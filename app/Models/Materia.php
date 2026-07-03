<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $table = 'materias';
    protected $fillable = ['nombre', 'creditos'];

    public function inscripciones()
    {
        return $this->hasMany(Inscripcion::class);
    }

    public function asistencias()
    {
        return $this->hasMany(Asistencia::class);
    }
}
