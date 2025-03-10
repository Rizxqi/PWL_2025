<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function foodBeverage() {
        return view('products.food-beverage');
    }
    public function beautyHealth() {
        return view('products.beauty-health');
    }
    public function homeCare() {
        return view('products.home-care');
    }
    public function babyKid() {
        return view('products.baby-kid');
    }
    public function index()
    {
        $products = [
            ['name' => 'Kopi Luwak', 'category' => 'Food & Beverage', 'price' => 50000, 'stock' => 20],
            ['name' => 'Shampoo Herbal', 'category' => 'Beauty & Health', 'price' => 30000, 'stock' => 15],
            ['name' => 'Cairan Pembersih', 'category' => 'Home Care', 'price' => 25000, 'stock' => 10],
            ['name' => 'Susu Formula', 'category' => 'Baby & Kid', 'price' => 100000, 'stock' => 25],
            ['name' => 'Teh Hijau', 'category' => 'Food & Beverage', 'price' => 40000, 'stock' => 30],
        ];

        return view('products.list', compact('products'));
    }
}
