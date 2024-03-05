<?php

namespace Database\Seeders;

use App\Models\Indisciplina;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IndisciplinaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Indisciplina::create([ 
                                'alumno_id'=> 1,
                                'user_id'=>1,
                                'fecha'=>"2024-01-10",
                                'motivo'=>"Falta de respeto al maestro",
                                'comentario'=>"El alumno le dijo groserías al maestro",
                            ]);
        
        Indisciplina::create([ 
                                'alumno_id'=> 1,
                                'user_id'=>1,
                                'fecha'=>"2024-03-01",
                                'motivo'=>"No entró a clase",
                                'comentario'=>"Mal",
                            ]);

        Indisciplina::create([ 
                                'alumno_id'=> 1,
                                'user_id'=>1,
                                'fecha'=>"2024-01-10",
                                'motivo'=>"Baraja en el salón",
                                'comentario'=>"Mal",
                            ]);
        
        Indisciplina::create([ 
                                'alumno_id'=> 5,
                                'user_id'=>1,
                                'fecha'=>"2024-01-10",
                                'motivo'=>"Grosero",
                                'comentario'=>"Mal",
                            ]);

        Indisciplina::create([ 
                                'alumno_id'=> 5,
                                'user_id'=>1,
                                'fecha'=>"2024-01-10",
                                'motivo'=>"Uniforme",
                                'comentario'=>"Mal",
                            ]);

        Indisciplina::create([ 
                                'alumno_id'=> 10,
                                'user_id'=>1,
                                'fecha'=>"2024-01-10",
                                'motivo'=>"Agresión física hacia otro compañero",
                                'comentario'=>"Mal",
                            ]);
        
        Indisciplina::create([ 
                                'alumno_id'=> 23,
                                'user_id'=>1,
                                'fecha'=>"2024-01-10",
                                'motivo'=>"Amenazas",
                                'comentario'=>"Mal",
                            ]);

        Indisciplina::create([ 
                                'alumno_id'=> 25,
                                'user_id'=>1,
                                'fecha'=>"2024-01-10",
                                'motivo'=>"Conducta agresiva",
                                'comentario'=>"Mal",
                            ]);
        
        Indisciplina::create([ 
                                'alumno_id'=> 36,
                                'user_id'=>1,
                                'fecha'=>"2024-01-10",
                                'motivo'=>"No entró a clase",
                                'comentario'=>"Mal",
                            ]);

        Indisciplina::create([ 
                                'alumno_id'=> 53,
                                'user_id'=>1,
                                'fecha'=>"2024-01-10",
                                'motivo'=>"Copió el examen",
                                'comentario'=>"Mal",
                            ]);

        Indisciplina::create([ 
                                'alumno_id'=> 53,
                                'user_id'=>1,
                                'fecha'=>"2024-01-10",
                                'motivo'=>"Abandonó la clase",
                                'comentario'=>"Mal",
                            ]);
        
        Indisciplina::create([ 
                                'alumno_id'=> 60,
                                'user_id'=>1,
                                'fecha'=>"2024-01-10",
                                'motivo'=>"Consumo de sustancias prohibidas",
                                'comentario'=>"Mal",
                            ]);

        Indisciplina::create([ 
                                'alumno_id'=> 18,
                                'user_id'=>1,
                                'fecha'=>"2024-01-10",
                                'motivo'=>"Venta de productos",
                                'comentario'=>"Mal",
                            ]);
        
        Indisciplina::create([ 
                                'alumno_id'=> 2,
                                'user_id'=>1,
                                'fecha'=>"2024-01-10",
                                'motivo'=>"Falsificación de documentos escolares",
                                'comentario'=>"Mal",
                            ]);

        Indisciplina::create([ 
                                'alumno_id'=> 14,
                                'user_id'=>1,
                                'fecha'=>"2024-01-10",
                                'motivo'=>"No hizo la tarea",
                                'comentario'=>"Mal",
                            ]);
        

        
    }
}
