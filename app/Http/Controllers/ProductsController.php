<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductsController extends Controller
{
    public function index()
    {
        // $products = [
        //     ['name' => 'Burger', 'description' => 'Vegan Burger for Boco','price' => 19.99],
        //     ['name' => 'Estus', 'description' => 'Estus flask for Cocktimus','price' => 29.99],
        //     ['name' => 'Elden Remembrance','description' => 'Elden Remembrance for Cocktimius Primoridal','price' => 39.99]
        // ];
        // //dd($products);
        // return view('product', compact('products'));
    }

    public function show(){

        $products = Product::all();
        return view('product', compact('products'));
    }

    public function create(){

        $products = [
            ['name' => 'Burger', 'description' => 'Vegan Burger for Boco','price' => 19.99],
            ['name' => 'Estus', 'description' => 'Estus flask for Cocktimus','price' => 29.99],
            ['name' => 'Elden Remembrance','description' => 'Elden Remembrance for Cocktimius Primoridal','price' => 39.99]
        ];

        Product::insert($products);
        //return view('products.create');
    }
}
