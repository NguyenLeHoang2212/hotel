<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function placeOrder(Request $request){
        $order = new Order;
        $order->user_id = Auth::user()->id;
        $order->address = $request->address;
        $order->note = $request->note;
        $order->status = Order::STATUS_PENDING;


        $order->save();


        $carts = session()->get('carts', []);
        $total = 0;
        foreach($carts as $product => $item){
            $orderItems = new OrderItem;
            $orderItems->order_id = $order->id;
            $orderItems->product_id = $product;
            $orderItems->product_name = $item['name'];
            $orderItems->product_price = $item['discount_price'];
            $orderItems->qty = $item['qty'];
            $orderItems->save();
            $total += $item['discount_price'] * $item['qty'];
        }

        $order->subtotal = $total;
        $order->total = $total;
        $order->save();
    }
}