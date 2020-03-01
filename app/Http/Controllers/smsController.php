<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Twilio\Rest\Client; 

use Validator;

class smsController extends Controller
{

    //

    //<?php 
 
// Update the path below to your autoload.php, 
// see https://getcomposer.org/doc/01-basic-usage.md 
//require_once '/path/to/vendor/autoload.php'; 
 

 


    public function oneText(Request $request){

        $sid=env('TWILIO_ACCOUNT_SID');
        $token=env('TWILIO_AUTH_TOKEN');
        $number = env( 'TWILIO_NUMBER' );
        
        $twilio = new Client($sid, $token);

        $validator = Validator::make($request->all(), [
            'numbers' => 'required',
            'message' => 'required'
        ]);
        
        //if ( $validator->passes() ) {

            $message = $twilio->messages 
                  ->create($request->input('numbers'), // to 
                           array( 
                               "from" => $number,       
                               "body" => $request->input( 'message' )
                           ) 
                  ); 
 
        print($message->sid);

       // }else {
            return back()->withErrors( $validator );
       // }

    }

    public function sendSms( Request $request )
    {
       // Your Account SID and Auth Token from twilio.com/console
        $sid    = env( 'TWILIO_ACCOUNT_SID' );
        $number = env( 'TWILIO_NUMBER' );
        $token  = env( 'TWILIO_AUTH_TOKEN' );

       $client = new Client( $sid, $token );

       $validator = Validator::make($request->all(), [
           'numbers' => 'required',
           'message' => 'required'
       ]);

       if ( $validator->passes() ) {

           $numbers_in_arrays = explode( ',' , $request->input( 'numbers' ) );

           $message = $request->input( 'message' );
           $count = 0;

           foreach( $numbers_in_arrays as $number )
           {
               $count++;

               $client->messages->create(
                   $number,
                   [
                       'from' => getenv( 'TWILIO_NUMBER' ),
                       'body' => $message,
                   ]
               );
           }

           return back()->with( 'success', $count . " messages sent!" );
              
       } else {
           return back()->withErrors( $validator );
       }
   }

 

}
