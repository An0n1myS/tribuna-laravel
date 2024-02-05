<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\newMail;
class MailController extends Controller
{
    public function send()
    {

        $bookingEvent_id = session('bookingEvent');


        Mail::send(new newMail($bookingEvent_id));

        return redirect(route('events.index'));
    }

    public function email()
    {
        return view('email');
    }
}
