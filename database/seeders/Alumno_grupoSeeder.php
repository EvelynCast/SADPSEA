<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Alumno_grupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Alumno_grupo::create([ 
            'grupo_id'=> 1,
            'alumno_id'=>1,
        ]);
        Alumno_grupo::create([ 
            'grupo_id'=> 1,
            'alumno_id'=>5,
        ]);
        Alumno_grupo::create([ 
            'grupo_id'=> 1,
            'alumno_id'=>23,
        ]);
        Alumno_grupo::create([ 
            'grupo_id'=> 1,
            'alumno_id'=>5,
        ]);
        Alumno_grupo::create([ 
            'grupo_id'=> 1,
            'alumno_id'=>11,
        ]);
    }
}
