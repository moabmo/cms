<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;

class SmsController extends Controller
{
    public function sendSms()
    {
        // Your Twilio credentials from .env
        $accountSid = env('TWILIO_SID');
        $authToken = env('TWILIO_AUTH_TOKEN');
        $twilioPhoneNumber = env('TWILIO_PHONE_NUMBER');

        // Initialize Twilio client
        $twilio = new Client($accountSid, $authToken);

        // Recipient's phone number (e.g., your own number)
        $toPhoneNumber = '+254719356271'; // Replace with your phone number

        // Send the SMS message
        $message = $twilio->messages->create(
            $toPhoneNumber,
            [
                'from' => $twilioPhoneNumber,
                'body' => 'Hello from your Laravel application!'
            ]
        );

        return 'SMS sent successfully!';
    }
}
