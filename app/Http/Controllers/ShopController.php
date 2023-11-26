<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index() {
        return view('home');
    }
    
    public function about() {
        return view('about');
    }

    public function shop() {
        return view('shop');
    }

    public function contact() {
        return view('contact');
    }

    public function message(Request $request){
        //return $request;

        return view('contact', ['data' => $request]);
    }    
}
