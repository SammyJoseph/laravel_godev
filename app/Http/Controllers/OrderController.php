<?php

namespace App\Http\Controllers;

use App\Events\CreateOrderEvent;
use App\Models\Order;
use App\Models\Purchase;
use Illuminate\Http\Request;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\Artisan;

class OrderController extends Controller
{
    public function create()
    {
        $faker = Faker::create();
        $user_id = $faker->randomDigitNotNull();
        $amount = $faker->randomFloat(2, 100, 500);

        /* $order = Order::create([            
            'user_id'   => $user_id,
            'amount'    => $amount,
        ]);

        $purchase = Purchase::create([
            'user_id'   => $user_id,
            'amount'    => $amount,
        ]); */

        Artisan::call('make:purchase', ['user_id' => $user_id, 'amount' => $amount]);

        // CreateOrderEvent::dispatch($purchase);

        return response()->json('Éxito');
    }
}
