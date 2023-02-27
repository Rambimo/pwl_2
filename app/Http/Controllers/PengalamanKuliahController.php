<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengalamanKuliahController extends Controller
{
    public function index(){
        return view ('Pengalaman')
            ->with('pengalaman', 'Belajar Pemrograman Web Lanjut Mudah Bukan?? BUKAN!!!');
    }
}
