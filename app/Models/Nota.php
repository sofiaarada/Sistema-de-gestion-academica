<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $fillable = [
        'inscripcion_id',
        'nota',
        'tipo'
    ];

    public function inscripcion()
    {
        return $this->belongsTo(Inscripcion::class);
    }
}
