<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Profesor extends Authenticatable
{
    use Notifiable;

    protected $table = 'profesores';
    protected $fillable = [
        'nombre',
        'apellido',
        'correo',
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
}
