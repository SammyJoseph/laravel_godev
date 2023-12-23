<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Floor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FloorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // para cada usuario
        Address::all()->each(function ($address){
            $n_add = rand(1, 3); // crea un número aleatorio de direcciones
            Floor::factory($n_add)->create([
                'address_id' => $address->id
            ]);
        });
    }
}
