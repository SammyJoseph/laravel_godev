<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Contracts\View\View;

class ProductController extends Controller
{
    public function index():View
    {
        $products = Product::all();

        return view('clase-7.index', compact('products'));
    }
}
