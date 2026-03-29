<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(Request $request) {
        //отдаём все продукты
        echo 'Product Controller: index';
    }

    public function create() {
        $products = Product::all();
        dd($products);
    }
    

    public function html() {
        return view('about', [
            'title' => 'About Page',
            'text' => 'Доброго полудня!',
            'is_on' => true
        ]);
    }

    // public function create метод get
    //  public function store метод post
    //  public function edit  метод put
    //  public function update
}

// $controller = new ProductController;
// $controller->title; 
// $controller->get();