<?php

namespace Database\Seeders;

use App\Models\Phone;
use App\Models\Sim;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Phone::all()->each(function($phone){
            Sim::factory()->create([
               'phone_id' => $phone->id, 
            ]);
        });
    }
}
