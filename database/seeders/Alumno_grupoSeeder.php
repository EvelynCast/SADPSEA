<?php

namespace Database\Seeders;

use App\Models\Alumno_grupo;
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
            'alumno_id'=>2,
        ]);
        Alumno_grupo::create([ 
            'grupo_id'=> 1,
            'alumno_id'=>3,
        ]);
        Alumno_grupo::create([ 
            'grupo_id'=> 1,
            'alumno_id'=>4,
        ]);
        Alumno_grupo::create([ 
            'grupo_id'=> 1,
            'alumno_id'=>5,
        ]);
        Alumno_grupo::create([ 
            'grupo_id'=> 2,
            'alumno_id'=>6,
        ]);
        Alumno_grupo::create([ 
            'grupo_id'=> 2,
            'alumno_id'=>7,
        ]);
        Alumno_grupo::create([ 
            'grupo_id'=> 2,
            'alumno_id'=>8,
        ]);
        Alumno_grupo::create([ 
            'grupo_id'=> 2,
            'alumno_id'=>9,
        ]);
        Alumno_grupo::create([ 
            'grupo_id'=> 2,
            'alumno_id'=>10,
        ]);
        Alumno_grupo::create([ 
            'grupo_id'=> 3,
            'alumno_id'=>11,
        ]);
        Alumno_grupo::create([ 
            'grupo_id'=> 3,
            'alumno_id'=>12,
        ]);
        Alumno_grupo::create([ 
            'grupo_id'=> 3,
            'alumno_id'=>13,
        ]);
        Alumno_grupo::create([ 
            'grupo_id'=> 3,
            'alumno_id'=>14,
        ]);
        Alumno_grupo::create([ 
            'grupo_id'=> 3,
            'alumno_id'=>15,
        ]);
    }
}
