<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('home.index');
    }

    public function about(){
        $title = "About Us";
        return view('home.about',compact('title'));
    }    
    
    public function contact(){
        $title = "Contact Us";
        return view('home.contact',compact('title'));
    }
}
