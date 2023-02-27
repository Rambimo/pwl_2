<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    // public function index(){
    //     return('selamat datang');
    // }

    public function index(){
        return view ('layout.home');
    }

    public function product(){
        return view ('layout.product');
    }
}
