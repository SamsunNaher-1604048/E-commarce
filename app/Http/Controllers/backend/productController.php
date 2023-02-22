<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;
 
class productController extends Controller
{
    function producteshow(){

       $datas = DB::table('products')
            ->join('categories', 'products.category', '=', 'categories.id')
            ->select('products.*', 'categories.title')
            ->get();
        return view('backend.pages.showProduct',['datas'=>$datas]);
    }

    function productcreate(){
        $category = Category::select('title','id')->get();
         return view('backend.pages.createProduct',['categorys'=> $category ]);
    }

    function productstore(Request $req){
        $product=new Product;
        $category = Category::find($req->category);
        $product->name = $req->name;
        $product->category = $req->category;
        $product->badge = $req->badge;
        $product->regular_price = $req->regular_price;
        $product->sell_price = $req->sell_price;
        $product->description = $req->description;
        $product->tag = $req->tag;
        $product->slug = $category->slack;
        $file = $req->file('image');
        $orgname = $file->getClientOriginalname();
        $path = 'upload/product/';
        $file ->move($path,$orgname);
        $product->image = $path.$orgname;
        $product->save();
        return redirect()->route('product.show');
    }

    function productdestory($id){
        $product= Product::find($id);
        unlink($product->image);
        $product->delete();
        return redirect()->route('product.show');
    }

    function productedit($id){
        $product = Product::find($id);
        $category = Category::all();
        return view('backend.pages.editproduct',['product'=>$product],['categorys'=>$category]);
     }

     function productupdate(Request $req,$id){
        $product = Product::find($id);
        $category = Category::find($req->category);
        $product->slug = $category->slack;
        if($req->has('image')){
            $file = $req->file('image');
            $path = "upload/product/";
            $orgName = $file->getClientOriginalName();
            $file->move($path,$orgName);
            $url = $path.$orgName;
            unlink($product->image);
        }
        else{
            $url = $product->image;
        }
        $product->name = $req->name;
        $product->category = $req->category;
        $product->badge = $req->badge;
        $product->regular_price = $req->regular_price;
        $product->sell_price = $req->sell_price;
        $product->description = $req->description;
        $product->tag = $req->tag;
        $product->image = $url;
        $product->save();
        return redirect()->route('product.show');
     }
}
