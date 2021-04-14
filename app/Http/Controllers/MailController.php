<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\testmail;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function send(){
        $details = [
            'title' => 'Test Mail From Flowers',
        ];
        Mail::to('satybaldyaruzhan49@gmail.com')->send(new testmail($details));
        return "Email Sent";
    }
}