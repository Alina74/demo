<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function catalog()
    {
        $products=Product::all();
        return view('users.products.catalog', compact('products'));
    }

    public function basket()
    {
        return view('users.products.basket');
    }

    public function card(Product $product)
    {
        return view('users.products.card', compact('product'));
    }

    public function orders()
    {
        return view('users.products.orders');
    }
}
