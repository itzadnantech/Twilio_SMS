<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;

class SentSMS extends Controller
{
    //sent_message
    public function sent_message(Request $request)
    {
        try {
            $account_sid =  env('TWILIO_SID');
            $account_token =  env('TWILIO_TOKEN');
            $twilio_number =  env('TWILIO_NUMBER');
            ///create client
            $client = new Client($account_sid, $account_token, $twilio_number);
           
            $client->messages->create('+923121707276', [
                'from' => $twilio_number,
                'body' => $request->message
            ]);
            return "Message sent...";
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
