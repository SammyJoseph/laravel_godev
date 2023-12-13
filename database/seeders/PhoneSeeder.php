<?php

namespace Database\Seeders;

use App\Models\Phone;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PhoneSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // crea un teléfono para cada usuario
        User::all()->each(function($user) {
            Phone::factory()->create([
                'user_id' => $user->id
            ]);
        });
    }
}
