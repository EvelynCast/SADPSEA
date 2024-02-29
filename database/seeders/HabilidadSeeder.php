<?php

namespace Database\Seeders;

use App\Models\Habilidad;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class HabilidadSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Habilidad::create([ 'nombre'=>'PROGRAMACIÓN']);
        Habilidad::create([ 'nombre'=>'ROBÓTICA']);
        Habilidad::create([ 'nombre'=>'DANZA']);
        Habilidad::create([ 'nombre'=>'HABILIDAD MATEMÁTICA']);
        Habilidad::create([ 'nombre'=>'INGLÉS']);
        Habilidad::create([ 'nombre'=>'TEATRO']);
        Habilidad::create([ 'nombre'=>'PINTURA Y DIBUJO']);
        Habilidad::create([ 'nombre'=>'DANZA FOLKLÓRICA']);
        Habilidad::create([ 'nombre'=>'FOTOGRAFÍA']);
        Habilidad::create([ 'nombre'=>'ARTESANÍAS']);
        Habilidad::create([ 'nombre'=>'CANTO']);
        Habilidad::create([ 'nombre'=>'DECLAMACIÓN']);
        Habilidad::create([ 'nombre'=>'BANDA DE GUERRA']);
        Habilidad::create([ 'nombre'=>'ESCOLTA']);
        Habilidad::create([ 'nombre'=>'AJEDREZ']);
        Habilidad::create([ 'nombre'=>'ORATORIA']);
        Habilidad::create([ 'nombre'=>'MÚSICA']);
        Habilidad::create([ 'nombre'=>'LITERATURA']);
        Habilidad::create([ 'nombre'=>'VOLEIBOL']);
        Habilidad::create([ 'nombre'=>'BASQUETBOL']);
        Habilidad::create([ 'nombre'=>'FUTBOL']);
        

    }
}
