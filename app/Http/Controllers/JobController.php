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
                $details = ['email' => $prospect->email];
                    SendEmail::dispatch($details);
                
            }

            $queued = 'Bulk Emails has been added to email queue. Should have already been sent or is in the process to be sent.';
            return view('mail.bulkSending', 
            ['contactRequests'=> $prospects, 
            'queued'=> $queued]
        );
    
     
       } 

    // public function storeCookie(Request $request){
    //     $message = $request->get('message');
    //     setcookie('message', $message);
    //     $prospects = ContactRequestReport::all();
    //     return view('mail.bulkSending', 
    //         ['contactRequests'=> $prospects, ]);


    // }
   
   
    //normal queue
    public function enqueue(Request $request)
    {   
        $details = ['email' => 'recipient@example.com'];
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
}
