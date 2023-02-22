<?php

namespace App\Http\Controllers\fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Product;
use Cart;

class CartController extends Controller
{
    function addtocart($id){
        //  $msg = "This is a simple message.";
        //  return response()->json(array('msg'=>$id), 200);
       $product = Product::find($id);
       Cart::add(['id' => $product->id, 'name' => $product->name, 'qty' => 1, 'price' => $product->sell_price, 'weight' => $product->sell_price, 'options' => ['image' =>$product->image]]);

    }

    function showcart(){
        return view('fontend.pages.Cart');
    }

    function removecart($id){
        Cart::remove($id);
        $msg = 'it is delete';
        return response()->json(array('msg'=> $msg), 200);
    }

    function updatecart(Request $req){

        Cart::update($req->rowid, $req->quality);
        return redirect()->route('add-to-cart.show');
    }
}
 