<?php

namespace App\Http\Controllers;

use App\Models\BookingEvent;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function getEvents(Request $request)
    {
        $sort = $request->input('sort');
        $type = $request->input('type');

        $now = Carbon::now();
        $events = Event::where('date_time', '<', $now);

        if ($type === '2') {
            $events->where('free_event', 1);
        } elseif ($type === '3') {
            $events->where('free_event', 0);
        }

        if ($sort === '1') {
            $events->orderBy('date_time', 'desc');
        } else {
            $events->orderBy('date_time');
        }

        $events = $events->get();

        return response()->json($events);
    }

    public function show(Event $event){

        return view('events.show', compact('event'));
    }

    public function ticket_init(){

        $user_name = request()->input('user_name');
        $event_id = request()->input('event_id');
        $phone = request()->input('phone');
        $email = request()->input('email');
        $tickets_count = request()->input('tickets_count');
        $status = request()->input('status');

        $data=array(
            'user_name'=>$user_name,
            "event_id"=>$event_id,
            "phone"=>$phone,
            "mail"=>$email,
            "count"=>$tickets_count,
            "status"=>$status
        );

        BookingEvent::create($data);
        $bookingEvent = BookingEvent::where('mail', '=', $email)->first();
        return view('payment', compact('bookingEvent'));
    }

    public function init_payment(BookingEvent $bookingEvent){
        $data=array('status'=>'Оплачено');
        $bookingEvent->update($data);
        session(['bookingEvent' => $bookingEvent->id]);
        session()->flash('success', 'Оплата пройшла успішно. Ваш квиток на пошті');


        return redirect()->route('send');
    }
}
