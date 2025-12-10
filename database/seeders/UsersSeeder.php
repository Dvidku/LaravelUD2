<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::truncate();  // Opativo: vacía la tabla antes de rellenarla de nuevo
        User::create([
            'email' => 'dsuciuy@gmail.com',
            'user_name' => 'David',
            'password' => 'oracle',
            'role' => 'administrador',
        ]);
        User::create([
            'email' => 'jenmack876@gmail.com',
            'user_name' => 'Jennifer Mack',
            'password' => 'oracle',
            'role' => 'user',
        ]);

    }
}
