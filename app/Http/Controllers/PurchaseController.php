<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\Request;
use Faker\Factory as Faker;

class PurchaseController extends Controller
{
    public function create()
    {
        $faker = Faker::create();
        $user_id = $faker->randomDigitNotNull();
        $amount = $faker->randomFloat(2, 100, 500);

        $purchase = Purchase::create([            
            'user_id'   => $user_id,
            'amount'    => $amount,
        ]);

        return response()->json('Éxito');
    }
}
