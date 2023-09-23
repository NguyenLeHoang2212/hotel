<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $products = Product::orderBy('created_at','desc')->limit(9)->get();
        return view('client.pages.menu.food',['products' => $products]);
    }
    public function index2(){
        $products = Product::orderBy('created_at','desc')->limit(6,10)->get();
        return view('client.pages.menu.drink',['products' => $products]);
    }
}