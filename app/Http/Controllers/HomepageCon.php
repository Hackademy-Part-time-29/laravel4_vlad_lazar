<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomepageCon extends Controller
{
    //
    public function homepage(){
        return view('homepage');
    }
}