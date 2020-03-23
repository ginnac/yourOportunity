<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\ContactRequestReport;

//email ----
use App\Mail\SummaryReport;
use Illuminate\Support\Facades\Mail;

class ContactRequestReportController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contactRequests = ContactRequestReport::all();
        $numberList = array();
        foreach($contactRequests as $contactRequest){
             $number=$contactRequest->phone_number;
            array_push($numberList, $number);
        }
        $comma_separated_list = implode(",", $numberList);
        //dd($comma_separated_list);
        
        
        //show all data
        return view('contactRequestReports.index', 
        ['contactRequests'=>ContactRequestReport::all(),
        'bulkNumbers'=>$comma_separated_list]
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
            'name' => 'required|min:3',
            'email' => 'required|email:rfc,dns|unique:contact_request_reports,email',
            'phone_number' => 'required|min:10',
            'comments' => 'required|min:3',
            'source'=> 'required'

        ]);       
        $report = new ContactRequestReport();
        //$report->name =$request->get('name');
        $report->name=$validData['name'];
        $report->email=$validData['email'];
        $report->phone_number=$validData['phone_number'];
        $report->comments=$validData['comments'];
        $report->source=$validData['source'];
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
        $report->phone_number =$request->get('phone_number');
        $report->email =$request->get('email');
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


    public function confirmSendMail($id)
    {
        $report = ContactRequestReport::findOrFail($id);
       return view('contactRequestReports.confirmSendmail',[
           'report'=>$report
       ]);
    }

    public function sendMail(Request $request, $id)
    {
        $report = ContactRequestReport::find($id);
        Mail::to($request->get('email'))->send(new SummaryReport($report));
        return redirect('/contact_request_reports/' . $id);
    }

    

}
