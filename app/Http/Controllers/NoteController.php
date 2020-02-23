<?php

namespace App\Http\Controllers;
use App\{ContactRequestReport, ContactAttemptNote};
use Illuminate\Http\Request;

class NoteController extends Controller
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
        //
    }

    /**
     * Show the form for creating a new resource.
     * @param ContactRequestReport
     * @return \Illuminate\Http\Response
     * 
     */
    public function create(ContactRequestReport $contactRequestReport)
    {
        return view('contactAttemptNotes.create',[
            'report'=> $contactRequestReport
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, ContactRequestReport $contactRequestReport )
    {
        //
        $contactAttemptNote = new ContactAttemptNote();
        $contactAttemptNote->Notes = $request->get('Notes');
        $contactAttemptNote->by_user= $request->get('by_user');
        $contactAttemptNote->contact_request_report_id = $contactRequestReport->id;
        $contactAttemptNote->save();

        return redirect('/contact_request_reports/'.$contactRequestReport->id);

        //dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
    }
}
