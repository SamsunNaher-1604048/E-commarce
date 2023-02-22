<?php

namespace App\Http\Controllers\fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Order_Items;
use Cart;

class OrderplaceController extends Controller
{
    function orderplace(){
        return view('fontend.pages.order-place');
    }

    function saveorderplace(Request $req)
    {
        $sum = 0;
        $carts =  Cart::content();
        foreach ($carts as $cart) {
            $sum += $cart->subtotal;
        }

        $order = new Order;
        $order->customer_name = $req->customer_name;
        $order->phone = $req->phone;
        $order->address = $req->address;
        $order->total_ammount = $sum;
        $order->save();

        foreach($carts as $cart){
            $orderitem = new Order_Items;
            $orderitem->order_id = $order->id;
            $orderitem->product_id = $cart->id;
            $orderitem->product_name = $cart->name;
            $orderitem->quantity = $cart->qty;
            $orderitem->sell_price = $cart->price;
            $orderitem->total_price = $cart->subtotal;
            $orderitem->save();
        }
        return redirect()->route('home.show');
    }
}

