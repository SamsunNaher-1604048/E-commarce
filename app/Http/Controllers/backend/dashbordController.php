<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;

class dashbordController extends Controller
{
    function showDashboard(){
        $user = User::where('type','=','customar')->get()->count();
        $totalcat = Category::all()->count();
        $totalpro = Product::all()->count();

        return view('backend.pages.dashboard',['user'=>$user, 'totalcat'=>$totalcat, 'totalpro'=>$totalpro]);
    }
}
