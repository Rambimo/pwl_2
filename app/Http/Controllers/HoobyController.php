<?php

namespace App\Http\Controllers;

use App\Models\HobbyModel;
use Illuminate\Http\Request;

class HoobyController extends Controller
{
    public function index(){
        $hobby = HobbyModel::all();
        return view ('Hobby')
            ->with('hobby', $hobby);
    }
}
