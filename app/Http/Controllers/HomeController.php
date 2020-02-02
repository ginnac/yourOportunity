<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //create a function can be public private or protected depending on if they have to be available outside of this controller

    public function index(){
        return view('welcome');
    }
}
