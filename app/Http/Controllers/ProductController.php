<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public $title;
    private $age;
    protected $name;

    public function get(Request $request) {
        
    }
}

$controller = new ProductController;
$controller->title; 
$controller->get();