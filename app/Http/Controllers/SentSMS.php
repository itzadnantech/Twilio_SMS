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
            $account_sid = "ACf8a44249dfe017ce8ea828bab99a296a";
            $account_token = "55e4f4abf0326167000d5c45c7246e19";
            $twilio_number =  "+16175551212";
            ///create client
            $client = new Client($account_sid, $account_token, $twilio_number);
            $client->messages->create('+923151542227', [
                'from' => $twilio_number,
                'body' => $request->message
            ]);
            return "Message sent...";
        } catch (\Exception $e) {
            return $e->getMessage();
        }
    }
}
