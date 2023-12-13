<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Phone>
 */
class PhoneFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'prefix'    => $this->faker->numberBetween(10, 99),
            'number'    => $this->faker->e164PhoneNumber(),
            'user_id'   => User::inRandomOrder()->first()->id
        ];
    }
}
