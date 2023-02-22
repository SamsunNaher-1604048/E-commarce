<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Order_Items;
use App\models\Order;

class OrderController extends Controller
{
    function showorder(){
        $orders = DB::table('order__items')
            ->join('orders', 'orders.id', '=', 'order__items.order_id')
            ->select('order__items.*', 'orders.phone', 'orders.customer_name','orders.address')
            ->get();

        return view('backend.pages.showorder',['orders'=>$orders]);
    }

    function deleteorder($id){
        $order = Order_Items::find($id);
        $order->delete();
        return redirect()->route('admin.showorder');
    }

    function editorder($id){

         $orderitem = Order_Items::find($id);
         $order = Order::where('id','=', $orderitem->order_id)->first();
         return view('backend.pages.orderedit',['order'=>$order,'orderitem'=>$orderitem]);
    }

    function updateorder(Request $req){

        $orderitem = Order_Items::find($req->orderitem_id);
        $order = Order::find($req->order_id);

        $orderitem->id = $req->orderitem_id;
        $orderitem->quantity = $req->quantity;
        $orderitem->total_price = $req->quantity*$orderitem->sell_price;
        $orderitem->save();

        $orderitems = Order_Items::where('order_id','=', $order->id)->get();
        $total = 0;
        foreach($orderitems as $orderitem){
            $total = $total+$orderitem->total_price ;
        }
        $order->address = $req->address;
        $order->total_ammount =$total;
        $order->save();

        return redirect()->route('admin.showorder');
    }
}
