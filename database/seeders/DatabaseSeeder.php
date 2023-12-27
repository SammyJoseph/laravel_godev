<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Phone;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $admin = \App\Models\User::factory()->create([
            'name' => 'Sam',
            'email' => 'sam@example.com',
        ]);
        /* Phone::factory()->create([
            'user_id' => $admin->id
        ]); */

        // se puede hacer aquí pero esta vez usé seeders individuales
        /* User::factory(10)->create()->each(function ($user)
            Phone::factory()->create([
                'user_id' => $user->id,
            ]);
        }); */

        $this->call([
            ProductSeeder::class,
            UserSeeder::class, // crea 9 usuarios
            PhoneSeeder::class, // asigna un teléfono por cada usuario
            AddressSeeder::class, // asigna un número aleatorio de direcciones por cada usuario
            RoleSeeder::class, // crea 4 roles únicos
            RoleUserSeeder::class, // crea 20 registros en role_user aleatoriamente
            SimSeeder::class,
            FloorSeeder::class,
            ImageSeeder::class,
            TagSeeder::class,
            PostSeeder::class,
        ]);
    }
}
