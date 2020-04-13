<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Jobs\SendEmail;

use App\Http\Controllers\Controller;

use Carbon\Carbon;
use App\ContactRequestReport;

class JobController extends Controller
{

    public function index()
    {
        $contactRequests = ContactRequestReport::all();
        // $numberList = array();
        // foreach($contactRequests as $contactRequest){
        //      $number=$contactRequest->phone_number;
        //     array_push($numberList, $number);
        // }
        // $comma_separated_list = implode(",", $numberList);
        //dd($comma_separated_list);
        
        
        //show all data
        return view('mail.bulkSending', 
        ['contactRequests'=> $contactRequests,]
    );
    }
    //send bulk emails
    public function sendEmails(Request $request){
    
            $prospects = ContactRequestReport::all();
            foreach($prospects as $prospect){

                $details = ['email' => $prospect->email,
                'subject' => $request->get('subject'),
                'message' => $request->get('message')];
                    SendEmail::dispatch($details);
                
            }


        //    $queued = 'Bulk Emails has been added to email queue. Should have already been sent or is in the process to be sent.';
        //     return view('mail.bulkSending', 
        //     ['contactRequests'=> $prospects, 
        //     'queued'=> $queued]
        // );

        return redirect('/emailConfirmation?type=queue'); 
       } 
   
   
    //normal queue
    public function enqueue(Request $request)
    {   
        $details = ['email' => 'andrew.campbell801@live.com',
        'subject' => 'Loca!!',
        'message' => 'Familia'];
        SendEmail::dispatch($details);
    }

    //delay 5 minutes
    // public function enqueue(Request $request)
    // {
    //     $details = ['email' => 'recipient@example.com'];
    //     $emailJob = (new      SendEmail($details))->delay(Carbon::now()->addMinutes(5));
    //     dispatch($emailJob);
    // }

    //immediatly
    // public function enqueue(Request $request)
    // {
    //     $details = ['email' => 'recipient@example.com'];
    //     SendEmail::dispatchNow($details);
    // }

    //withchain to chain 1 job after another one
    // SendEmail::withChain([
    //     new VerificationEmail,
    //     new WelcomeEmail
    // ])->dispatch();

    
    public function sendOneMail(Request $request, $id)
    {
        $report = ContactRequestReport::find($id);
        $email = $report->email;
        //Mail::to($request->get('email'))->send(new SummaryReport($report));
        
        $details = ['email' => $email,
        'subject' => $request->get('subject'),
        'message' => $request->get('message')];
        SendEmail::dispatch($details);
        
        return redirect('/contact_request_reports/' . $id);
    }


    public function confirmationPage(){

        $confirmationMessage = $_GET['type'];


        if(isset($confirmationMessage)){

            if($confirmationMessage == 'queue'){

                $confirmationMessage = 'Bulk Emails has been added to email queue. Should have already been sent or is in the process to be sent. Allow up to 45 minutes for all of them to be sent.';
            }

            else if($confirmationMessage == 'single'){
                $confirmationMessage = 'Message has been sent';
            }
            else {
                $confirmationMessage = 'error';   
            }    
        }

        else {
            $confirmationMessage = 'error';   
        }
    
        
        return view('mail.emailConfirmation', 
            
            ['confirmationMessage'=> $confirmationMessage ]
            
        );
    
    }

}


