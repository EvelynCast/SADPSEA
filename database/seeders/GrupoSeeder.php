<?php

namespace Database\Seeders;

use App\Models\Grupo;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GrupoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Grupo::create([ 'nombre'=>'6AVP']);
        Grupo::create([ 'nombre'=>'6AVE']);
        Grupo::create([ 'nombre'=>'6AVO']);

    }
}
