<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        return view ('Profile')
            ->with('nama', 'Rambimo')
            ->with('kelas', 'TI 2B')
            ->with('absen', '19');
    }
}
