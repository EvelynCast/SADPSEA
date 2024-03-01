<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'  => 'Luis Carlos',
            'email' => 'santillan.itc@gmail.com',
            'password' => bcrypt('carlos123')
        ])->assignRole('maestro');

        User::create([
            'name'  => 'Francisco Lopez',
            'email' => 'francisco@mail.com',
            'password' => bcrypt('francisco123')
        ])->assignRole('administrador');
    }
}
