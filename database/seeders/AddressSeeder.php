<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // para cada usuario
        User::all()->each(function ($user){
            $n_add = rand(1, 3); // crea un número aleatorio de direcciones
            Address::factory($n_add)->create([
                'user_id' => $user->id
            ]);
        });
    }
}
