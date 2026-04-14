<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Crear 3 usuarios de prueba.
     */
    public function run(): void
    {
        $users = [
            [
                'name'     => 'Administrador',
                'email'    => 'admin@alquiler.com',
                'password' => Hash::make('admin123'),
                'role'     => 'administrador',
            ],
            [
                'name'     => 'Carlos López',
                'email'    => 'carlos@alquiler.com',
                'password' => Hash::make('carlos123'),
                'role'     => 'clientela',
            ],
            [
                'name'     => 'María García',
                'email'    => 'maria@alquiler.com',
                'password' => Hash::make('maria123'),
                'role'     => 'encargado',
            ],
        ];

        foreach ($users as $userData) {
            User::firstOrCreate(
                ['email' => $userData['email']],
                $userData
            );
        }
    }
}
