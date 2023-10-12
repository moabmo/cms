<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SmsLogController extends Controller
{
    public function sendSms()
    {
        $phoneNumber = '+254719356271'; // Replace with your phone number
        $message = 'Hello from your Laravel application!';

        // Log the SMS message
        Log::info("Sending SMS to $phoneNumber: $message");

        return 'SMS logged for testing!';
    }
}
