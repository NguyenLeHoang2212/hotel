<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function addToCart($product){
        $productss = Product::findOrFail($product);
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
        $total_items = count($carts);

        return response()->json([
            'message' => 'Add product to cart success',
            'total_items' => $total_items
        ]);

    }

    public function index(){
        $carts = session()->get('carts') ?? [];
        return view('client.pages.cart', ['carts' => $carts]);
    }

    public function deleteItem($product){
        $carts = session()->get('carts') ?? [];
        if(array_key_exists($product,$carts)){
            unset($carts[$product]);
        }
        session()->put('carts', $carts);
        $total_items = count($carts);

        $total_price = $this->calculateTotalPrice($carts);
        return response()->json([

            'total_price' => $total_price,
            'total_items' => $total_items,

        ]);

    }
    public function calculateTotalPrice($carts): float{
        $total = 0;
        foreach($carts as $item){
            $total += $item['discount_price'] * $item['qty'];
        }
        return $total;
    }

    public function updateItem($product, $qty){
        $carts = session()->get('carts', []);
        if(array_key_exists($product, $carts)){
            $carts[$product]['qty'] = $qty;
            if(!$qty){
                unset($carts[$product]);
            }
            session()->put('carts', $carts);
        }
        $total_items = count($carts);

        $total_price = $this->calculateTotalPrice($carts);
        return response()->json([

            'total_price' => $total_price,
            'total_items' => $total_items,
            'message' => 'Update item success'

        ]);
    }


    public function checkout(){
        $carts = session()->get('carts', []);

        return view('client.pages.checkout', ['carts' => $carts]);
    }
    public function emptyCart(){
        session()->put('carts', []);
        return response()->json([
            'total_price' => 0,
            'total_items' => 0
        ]);
    }
}