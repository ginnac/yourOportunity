<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ContactRequestReport;

class prospectViewController extends Controller
{
    //
    public function index(Request $request) {

        //dd($request->query('name', 'default value'))
        return view('prospectView.homepage');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        //validate tp not show data

        $validData =$request->validate([
            'name' => 'required|min:3',
            'email' => 'required|email:rfc,dns|unique:contact_request_reports,email',
            'phone_number' => 'required|min:10',
            'comments' => 'required|min:3',
            'source'=> 'required'

        ]);
        
        $prospectName =$request->get('name');
        $report = new ContactRequestReport();
        //$report->name =$request->get('name');
        $report->name=$validData['name'];
        $report->email=$validData['email'];
        $report->phone_number=$validData['phone_number'];
        $report->comments=$validData['comments'];
        $report->source=$validData['source'];
        $report->save();

        return view('prospectView.confirmation', [
            'prospect' => $prospectName]);
    }

   



}


