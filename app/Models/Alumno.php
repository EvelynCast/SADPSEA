<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Alumno extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'alumnos';

    public function materias(){
        return $this->hasMany(AlumnoMateria::class, 'alumno_id', 'id')->with('materia');
    }

    public function reportesDestacados(){
        return $this->hasMany(Destacado::class);
    }

    public function reportesIndisciplina(){
        return $this->hasMany(Indisciplina::class);
    }
}
