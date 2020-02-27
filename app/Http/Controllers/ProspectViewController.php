<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class prospectViewController extends Controller
{
    //
    public function index(Request $request) {

        //dd($request->query('name', 'default value'))
        return view('prospectView.homepage');
    }
}
