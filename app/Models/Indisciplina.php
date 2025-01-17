<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Indisciplina extends Model
{
    use HasFactory;
    protected $fillable=['alumno_id', 'user_id', 'fecha', 'motivo', 'comentario'];

    public function alumno(){
        return $this->belongsTo(Alumno::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
