<?php

namespace Database\Factories;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class RoleUserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $role_id = Role::inRandomOrder()->first()->id;
        $user_id = User::inRandomOrder()->first()->id;

        return [
            'role_id'   => $role_id,
            'user_id'   => $user_id,
        ];
    }
}
