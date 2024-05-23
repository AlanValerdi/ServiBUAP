<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor_Materia extends Model
{
    use HasFactory;

    protected $table = 'profesor_materias';

    public function materia()
    {
        return $this->belongsTo(Materia::class);
    }
}

