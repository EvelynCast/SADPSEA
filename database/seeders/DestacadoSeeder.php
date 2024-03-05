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
            'alumno_id'=> 12,
            'user_id'=>1,
            'habilidad_id'=>21,
            'fecha'=>"2024-02-14",
            'comentario'=>"Bueno",
        ]);

        Destacado::create([ 
            'alumno_id'=> 12,
            'user_id'=>1,
            'habilidad_id'=>20,
            'fecha'=>"2024-02-14",
            'comentario'=>"Bueno",
        ]);

        Destacado::create([ 
            'alumno_id'=> 15,
            'user_id'=>1,
            'habilidad_id'=>15,
            'fecha'=>"2024-02-14",
            'comentario'=>"Bueno",
        ]);

        Destacado::create([ 
            'alumno_id'=> 11,
            'user_id'=>1,
            'habilidad_id'=>19,
            'fecha'=>"2024-02-14",
            'comentario'=>"Bueno",
        ]);

        Destacado::create([ 
            'alumno_id'=> 53,
            'user_id'=>1,
            'habilidad_id'=>11,
            'fecha'=>"2024-02-14",
            'comentario'=>"Bueno",
        ]);

        Destacado::create([ 
            'alumno_id'=> 7,
            'user_id'=>1,
            'habilidad_id'=>16,
            'fecha'=>"2024-02-14",
            'comentario'=>"Bueno",
        ]);
        
        Destacado::create([ 
            'alumno_id'=> 15,
            'user_id'=>1,
            'habilidad_id'=>12,
            'fecha'=>"2024-02-14",
            'comentario'=>"Bueno",
        ]);

        Destacado::create([ 
            'alumno_id'=> 15,
            'user_id'=>1,
            'habilidad_id'=>17,
            'fecha'=>"2024-02-14",
            'comentario'=>"Bueno",
        ]);
        
        Destacado::create([ 
            'alumno_id'=> 2,
            'user_id'=>1,
            'habilidad_id'=>19,
            'fecha'=>"2024-02-14",
            'comentario'=>"Bueno",
        ]);

        Destacado::create([ 
            'alumno_id'=> 2,
            'user_id'=>1,
            'habilidad_id'=>1,
            'fecha'=>"2024-02-14",
            'comentario'=>"Bueno",
        ]);

        Destacado::create([ 
            'alumno_id'=> 20,
            'user_id'=>1,
            'habilidad_id'=>16,
            'fecha'=>"2024-02-14",
            'comentario'=>"Bueno",
        ]);

        Destacado::create([ 
            'alumno_id'=> 24,
            'user_id'=>1,
            'habilidad_id'=>13,
            'fecha'=>"2024-02-14",
            'comentario'=>"Bueno",
        ]);

        Destacado::create([ 
            'alumno_id'=> 24,
            'user_id'=>1,
            'habilidad_id'=>7,
            'fecha'=>"2024-02-14",
            'comentario'=>"Bueno",
        ]);

        Destacado::create([ 
            'alumno_id'=> 24,
            'user_id'=>1,
            'habilidad_id'=>21,
            'fecha'=>"2024-02-14",
            'comentario'=>"Bueno",
        ]);

        Destacado::create([ 
            'alumno_id'=> 32,
            'user_id'=>1,
            'habilidad_id'=>7,
            'fecha'=>"2024-02-14",
            'comentario'=>"Bueno",
        ]);
       
    }
}
