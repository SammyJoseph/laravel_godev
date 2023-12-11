<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name'              => 'Producto 1',
            'short_description' => 'Lorem ipsum',
            'description'       => 'Lorem ipsum dolor set asimet',
            'price'             => '25.00'
        ]);

        Product::create([
            'name'              => 'Producto 2',
            'short_description' => 'Lorem ipsum',
            'description'       => 'Lorem ipsum dolor set asimet',
            'price'             => '43.00'
        ]);
    }
}
