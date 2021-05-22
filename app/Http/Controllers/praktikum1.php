<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class praktikum1 extends Controller
{
    public function home(){
        return view ("home0180");
    }
    public function artikel(){
        return view("artikel0180");
    }
    public function contactUs(){
        return view("contactUs0180");
    }
}
