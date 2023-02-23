<?php

namespace App\Http\Controllers\fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class SearchController extends Controller
{
    function productsearch(Request $req){

        $products = Product::where('name', 'LIKE', '%'.$req->search.'%')->get();

        if($products->count()>0){
            return view('fontend.pages.searchproduct',['products'=>$products]);
        }
        else{
            return redirect()->route('home.show');
        }
        
    }
}
