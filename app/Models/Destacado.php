<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destacado extends Model
{
    use HasFactory;
    protected $fillable=['alumno_id', 'user_id', 'habilidad_id', 'fecha', 'comentario'];

    public function alumno(){
        return $this->belongsTo(Alumno::class);
    }

    public function habilidad(){
        return $this->belongsTo(Habilidad::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
