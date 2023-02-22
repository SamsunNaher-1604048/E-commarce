<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class dashbordController extends Controller
{
    function showDashboard(){
        return view('backend.pages.dashboard');
    }
}
