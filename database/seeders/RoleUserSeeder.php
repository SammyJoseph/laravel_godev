<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Database\Factories\RoleUserFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = User::pluck('id')->toArray();
        $roles = Role::pluck('id')->toArray();

        for ($i=0; $i < 20; $i++) { 
            $user_id = array_rand($users) + 1; // +1 para evitar el valor 0
            $role_id = array_rand($roles) + 1;

            DB::table('role_user')->insert([
                'user_id'   => $user_id,
                'role_id'   => $role_id,
            ]);
        }
    }
}
