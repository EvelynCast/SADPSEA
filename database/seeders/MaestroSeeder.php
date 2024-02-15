<?php

namespace Database\Seeders;

use App\Models\Maestro;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MaestroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Maestro::create([ 'nombre'=>'LUIS CARLOS SANTILLÁN HERNÁNDEZ']);
        Maestro::create([ 'nombre'=>'JORGE IBARRA QUINTERO']);
        Maestro::create([ 'nombre'=>'ALCEMO PALAFOX VELÁZQUEZ']);
        Maestro::create([ 'nombre'=>'LUZ MARISELA GARCÍA ÁLVAREZ']);
        Maestro::create([ 'nombre'=>'FRANCISCO JOSÉ ROCHÍN GONZÁLEZ']);
        
    }
}
