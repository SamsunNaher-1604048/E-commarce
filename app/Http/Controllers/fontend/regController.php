<?php

namespace App\Http\Controllers\fontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use  App\Models\User;
use Hash;

// Hash::make

class regController extends Controller
{
    function showreg(){
        return view('fontend.pages.reg');
    }

    function storereg(Request $req){
        $user =new User;
        $user->name = $req->name;
        $user->email = $req->email;
        $user->password = Hash::make($req->password);
        $user->save();
        return redirect()->route('login.show');
    }
}
