<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SMS_API extends Controller
{
    //sent sms
    public function sent_sms()
    {
        $id = env('TWILIO_SID');
        $token = env('TWILIO_TOKEN');
        $from = env('+19133794954');
        $url = "https://api.twilio.com/2010-04-01/Accounts/$id/SMS/Messages";
        $to = "+923121707276"; // twilio trial verified number
        $body = "using twilio rest api from Fedrick";
        $data = array(
            'From' => $from,
            'To' => $to,
            'Body' => $body,
        );
        $post = http_build_query($data);
        $x = curl_init($url);
        curl_setopt($x, CURLOPT_POST, true);
        curl_setopt($x, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($x, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($x, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($x, CURLOPT_USERPWD, "$id:$token");
        curl_setopt($x, CURLOPT_POSTFIELDS, $post);
        $y = curl_exec($x);
        curl_close($x);
        var_dump($post);
        var_dump($y);
    }
}
