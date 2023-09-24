<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function addToCart($product){
        $productss = Product::find($product);
        $carts = session()->get('carts') ?? [];

        $imagesLink = is_null($productss->image) || !file_exists('images/' . $productss->image) ? 'https://phutungnhapkhauchinhhang.com/wp-content/uploads/2020/06/default-thumbnail.jpg' : asset('images/' . $productss->image);
        $carts[$product] = [
            'name' => $productss->name,
            'price' => $productss->price,
            'discount_price' => $productss->discount_price,
            'image' => $imagesLink,
            'qty' => ($carts[$product]['qty'] ?? 0) + 1
        ];
        session()->put('carts', $carts);

        return response()->json(['message' => 'Success']);
    }

    public function index(){
        $carts = session()->get('carts') ?? [];
        return view('client.pages.cart', ['carts' => $carts]);
    }
}