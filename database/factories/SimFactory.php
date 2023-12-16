<?php

namespace Database\Factories;

use App\Models\Phone;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sim>
 */
class SimFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $companies = ['movistar', 'entel', 'claro'];

        return [
            'serial_number' => $this->faker->randomNumber(5, true),
            'company'       => $this->faker->randomElement($companies),
            // 'phone_id'      => Phone::inRandomOrder()->first()->id // se asigna en el seeder
        ];
    }
}
