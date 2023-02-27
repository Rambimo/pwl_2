<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function index(){
    //     return('selamat datang');
    // }

    public function index(){
        return view ('layout.Layout.template');
    }

    public function product(){
        return view ('layout.product');
    }

    public function news(){
        return view ('layout.news');
    }

    public function program(){
        return view ('layout.program');
    }

    public function aboutus(){
        return view ('layout.aboutus');
    }

    public function contactus(){
        return view ('layout.contactus');
    }
}
