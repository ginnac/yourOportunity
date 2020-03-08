<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Jobs\SendEmail;

use App\Http\Controllers\Controller;

use Carbon\Carbon;
use App\ContactRequestReport;

class JobController extends Controller
{
    //send bulk emails
    public function sendEmails(Request $request){
    
            $prospects = ContactRequestReport::all();
            foreach($prospects as $prospect){
                $details = ['email' => $prospect->email];
                    SendEmail::dispatch($details);
                
            }
    
     
       } 
   
   
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
