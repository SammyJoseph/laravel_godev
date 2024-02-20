<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;
use Faker\Factory as Faker;

class OrderController extends Controller
{
    public function create()
    {
        $faker = Faker::create();
        $user_id = $faker->randomDigitNotNull();
        $amount = $faker->randomFloat(2, 100, 500);

        Order::create([            
            'user_id'   => $user_id,
            'amount'    => $amount,
        ]);
    }
}
