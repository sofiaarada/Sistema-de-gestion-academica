<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Asistencia extends Model
{
    protected $fillable = [
        'estudiante_id',
        'materia_id',
        'fecha',
        'presente'
    ];

    public function estudiante()
    {
        return $this->belongsTo(Estudiante::class);
    }

    public function materia()
    {
        return $this->belongsTo(Materia::class);
    }
}
