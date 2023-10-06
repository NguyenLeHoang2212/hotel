<?php

namespace App\Listeners;

use App\Events\PlaceOrderSuccess;
use App\Models\Product;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class MinusQtyProduct
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(PlaceOrderSuccess $event): void
    {
        $carts = $event->carts;
        foreach($carts as $product => $item){
            $productss = Product::find($product);
            $productss->qty = $productss->qty - $item['qty'];
            $productss->save();
        }
    }
}