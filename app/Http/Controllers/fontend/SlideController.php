<?php

namespace App\Http\Controllers\fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\Slider;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
use App\Models\Category;

class SlideController extends Controller
{
    function showslide(){
        $slide = Slider::all();
    
          $data = DB::table('categories')
                       ->where('title', '=', 'laptop')
                       ->first();

          $products = DB::table('products')
                     ->where('category','=',$data->id)
                     ->get();

          $tvdata = DB::table('categories')
                     ->where('title','=','TV')
                     ->first();

          $tvproduct = DB::table('products')
                       ->where('category','=',$tvdata->id)
                       ->get();
           
           $Trenddings = DB::table('products')
                        ->where('tag','=','Trendding Products')
                        ->get();
                    
            $bestsellers = DB::table('products')
                          ->where('tag','=','Bestsellers')
                          ->get();
                        
        return view('fontend.pages.home',['sliders'=>$slide, 'products'=>$products, 'data'=>$data, 'tvproducts'=>$tvproduct,'tvdata'=>$tvdata, 'Trenddings'=> $Trenddings, 'bestsellers'=>$bestsellers]);
       
    }

}
