<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BookingEvent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingEventController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $tickets = BookingEvent::all();

        return view('admin.tickets.index',compact(['user','tickets']));
    }


    public function edit(BookingEvent $booking_event)
    {
        $user = Auth::user();
        return view('admin.booking_events.edit', compact(['booking_event','user']));
    }

    public function update(BookingEvent $user_guest)
    {
        $data = request()->validate([
            'username'=>'required|string',
            'user_group'=>'required|string',
            'password'=>'required|string',
        ]);
        $data_user=([
            'username'=>$data['username'],
            'user_group'=>$data['user_group'],
            'password'=>bcrypt($data['password']),
        ]);

        $user_guest->update($data_user);
        return redirect()->route('admin.booking_events.index');
    }


}
