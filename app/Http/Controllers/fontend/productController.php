<?php

namespace App\Http\Controllers\fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    function showproduct($id){
        $product = Product::find($id);
        $products = DB::table('products')
                    ->where('category','=',$product->category)
                    ->where('id','!=',$product->id)
                    ->get();

        return view('fontend.pages.productdetails',['product'=>$product, 'products'=>$products]);
    }
}
