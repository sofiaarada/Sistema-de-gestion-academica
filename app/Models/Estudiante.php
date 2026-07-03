<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Estudiante extends Authenticatable
{
    use Notifiable;

    protected $table = 'estudiantes';
    protected $fillable = [
        'nombre',
        'apellido',
        'correo',
        'programa',
        'password'
    ];

    protected $hidden = [
        'password',
    ];

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }

    public function inscripciones()
    {
        return $this->hasMany(Inscripcion::class);
    }

    public function asistencias()
    {
        return $this->hasMany(Asistencia::class);
    }
}
