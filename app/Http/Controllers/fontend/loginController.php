<?php

namespace App\Http\Controllers\fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models\User;


class loginController extends Controller
{
    function showlogin(){
        return view('fontend.pages.login');
    }

    function storelogin(Request $req){
        $user = new User;
        $req->validate([
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);

        $credentials = $req->only('email', 'password');

        if (Auth::attempt($credentials)){
            if(Auth::user()->type == "customar"){
                return redirect()->route('home.show');
            }
            else{
                return "sorry";
            }
        }
        else{
            return redirect()->route('login.show');
        }

    }

    function userlogout(){
        Auth::logout();
        return redirect()->route('home.show');

    }
}
