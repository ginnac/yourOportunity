<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Jobs\SendEmail;

use App\Http\Controllers\Controller;

use Carbon\Carbon;

class JobController extends Controller
{
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
}
