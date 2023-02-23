<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class loginController extends Controller
{
    function adminlogin(){
        return view('backend.pages.adminlogin');
    }

    function adminchecklogin(Request $req){
        $req->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);


        if(Auth::guard('admin')->attempt($req->only(['email','password']))){
            if( Auth::guard('admin')->user()->type =='admin'){
               return redirect()->route('dashboard.show');
            }
            else{
                return redirect()->route('admin.login');
            }
        }
        else{
            return redirect()->route('admin.login');
        }
    }

    function adminlogout(){
        Auth::guard('admin')->logout();
        return view('backend.pages.adminlogin');
    }
}
