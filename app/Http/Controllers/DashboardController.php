<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //parameter Request $request should be past 

    public function index(Request $request) {

        //dd($request->query('name', 'default value'))
        return view('dashboard',[
            'type' => 'administrator',
            'name' => $request->query('name', 'User')
        ]);
    }
}
