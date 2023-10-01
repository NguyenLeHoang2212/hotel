<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\User;
use App\Models\OrderItem;
use App\Models\OrderPaymentMethod;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailToCustomer;
use App\Mail\MailToAdmin;



class OrderController extends Controller
{
    public function placeOrder(Request $request){
        try{
            DB::beginTransaction();
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

        $oderPaymentMethod = new OrderPaymentMethod;
        $oderPaymentMethod->order_id = $order->id;
        $oderPaymentMethod->payment_provider = $request->payment_method;
        $oderPaymentMethod->status = OrderPaymentMethod::STATUS_PENDING;
        $oderPaymentMethod->$total;
        $oderPaymentMethod->save();

        //update 1 eloquent
        $user = User::find(Auth::user()->id);
        $user->phone = $request->phone;
        $user->save();
        Mail::to('hoang19992212@gmail.com')->send(new MailToCustomer($order));
        Mail::to(config('my-config.admin-email'))->send(new MailToAdmin($order, $user));

        session()->put('carts',[]);

        DB::commit();


        return redirect()->route('home');


        }catch(\Exception $exception){
        DB::rollback();

        }

    }
}
