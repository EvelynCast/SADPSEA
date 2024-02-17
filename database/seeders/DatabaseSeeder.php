<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\AlumnoSeeder;
use Database\Seeders\MateriaSeeder;
use Database\Seeders\NoticiaSeeder;
use Database\Seeders\AlumnoMateriaSeeder;
use Database\Seeders\HabilidadSeeder;
use Database\Seeders\MaestroSeeder;
use Database\Seeders\IndisciplinaSeeder;
use Database\Seeders\DestacadoSeeder;
use Database\Seeders\Grupo;
use Database\Seeders\Alumno_grupo;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //$this->call(AlumnoSeeder::class);
        $this->call(NoticiaSeeder::class);
        $this->call(AlumnoSeeder::class);
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(MateriaSeeder::class);
        $this->call(AlumnoMateriaSeeder::class);
        $this->call(HabilidadSeeder::class);
        $this->call(MaestroSeeder::class);
        $this->call(IndisciplinaSeeder::class);
        $this->call(DestacadoSeeder::class);
        $this->call(Grupo::class);
        $this->call(Alumno_grupo::class);
    }
}
