<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class categoryController extends Controller
{
    function categoryshow(){
        $category = Category::all();
        return view('backend.pages.showcategory',['categories'=> $category]);
    }

    function categorycreate(){
        return view('backend.pages.createcategory');
    }

    function categorystore(Request $req){
        $category = new Category;
        $lowercase= strtolower($req->title);
        $category->title = $req->title;
        $category->slack = str_replace(" ","-", $lowercase); 
        $category->save();
        return redirect()->route('category.show');
    }

    function categorydestory($id){
        $category = Category::find($id);
        $category->delete();
        return redirect()->route('category.show');
    }

    function categoryedit($id){
        $category = Category::find($id);
        return view('backend.pages.editcategory',['category'=>$category]);
    }
    
    function categoryupdate(Request $req,$id){
        $category = Category::find($id);
        $category->id = $id;
        $category->title = $req->title;
        $lowercase= strtolower($req->title);
        $category->slack = str_replace(" ","-", $lowercase); 
        $category->save();
        return redirect()->route('category.show');
    }
}
