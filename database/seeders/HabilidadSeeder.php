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
        Habilidad::create([ 'nombre'=>'QUÍMICA']);
        Habilidad::create([ 'nombre'=>'HABILIDAD MATEMÁTICA']);
        Habilidad::create([ 'nombre'=>'AJEDREZ']);
        Habilidad::create([ 'nombre'=>'INGLÉS']);

    }
}
