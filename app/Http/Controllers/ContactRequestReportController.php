<?php

namespace App\Http\Controllers;
use App\ContactRequestReport;

use Illuminate\Http\Request;

class ContactRequestReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //show all data
        return view('contactRequestReports.index', 
        ['contactRequests'=>ContactRequestReport::all()]
    );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //create a new form
        return view('contactRequestReports.create');

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
            'name' => 'required|min:3'
        ]);       
        $report = new ContactRequestReport();
        //$report->name =$request->get('name');
        $report->name =$validData['name'];
        $report->save();

        return redirect('/contact_request_reports');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @param ContactRequestReport $contactRequestReport
     * @return \Illuminate\Http\Response
     */
    public function show(ContactRequestReport $contactRequestReport)
    {
        //show 1 contact information

       // $report = ContactRequestReport::findOrFail($id);
        return view('contactRequestReports.show',[
            'report' => $contactRequestReport
        ]);


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //show the edit page

        $report = ContactRequestReport::findOrFail($id);
        return view('contactRequestReports.edit',[
            'report' => $report
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //this function can be used to make changes to DB make them persistent 
        
        $report = ContactRequestReport::find($id);
        $report->name =$request->get('name');
        $report->save();

        return redirect('/contact_request_reports');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $report = ContactRequestReport::find($id);
        $report->delete();

        return redirect('/contact_request_reports');
    }


    public function confirmDelete($id)
    {
        $report = ContactRequestReport::findOrFail($id);
       return view('contactRequestReports.confirmDelete',[
           'report'=>$report
       ]);
    }


    

}
