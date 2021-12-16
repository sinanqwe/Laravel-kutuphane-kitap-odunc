<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function aboutus()
    {
        return view('home.aboutus');
    }

    public function test($id){
        return view('home.test');
    }

    
}
