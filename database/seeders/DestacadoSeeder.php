<?php

namespace Database\Seeders;

use App\Models\Destacado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DestacadoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Destacado::create([ 
            'alumno_id'=> 1,
            'maestro_id'=>1,
            'habilidad_id'=>4,
            'fecha'=>"2024-02-14",
            'comentario'=>"Es bueno resolviendo problemas en poco tiempo.",
        ]);
    }
}
