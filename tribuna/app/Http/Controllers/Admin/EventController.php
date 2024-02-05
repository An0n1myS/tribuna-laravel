<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BookingEvent;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EventController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $events = Event::all();

        return view('admin.events.index',compact(['user','events']));
    }
    public function create()
    {
        $user = Auth::user();

        return view('admin.events.create',compact(['user']));
    }
    public function store()
    {
        $name = request()->input('name');
        $date_time = request()->input('date_time');
        $description = request()->input('description');
        $entry_type = request()->input('entry-type');
        $price = request()->input('price');
        $available_tickets = request()->input('available_tickets');
        $photo_url = request()->file('photo_url')->store('events_url', 'uploads');


        $data = array(
            'name'=>$name,
            'date_time'=>$date_time,
            'description'=>$description,
            'free_event'=>$entry_type,
            'price'=>$price,
            'available_tickets'=>$available_tickets,
            'photo'=>$photo_url,
        );

        Event::create($data);
        return redirect()->route('admin.events.index');
    }

    public function edit(Event $event)
    {
        $user = Auth::user();
        return view('admin.events.edit', compact(['event','user']));
    }

    public function update(Event $event)
    {
        $name = request()->input('name');
        $description = request()->input('description');
        $entry_type = request()->input('entry-type');
        $price = request()->input('price');
        $available_tickets = request()->input('available_tickets');
        if (request()->file('photo_url') == null){
            $photo_url = request()->input('photo_url_hidden');

        }else {
            $photo_url = request()->file('photo_url')->store('events_url', 'uploads');
        }

        if (request()->input('date_time') == null){
            $date_time = request()->input('event_date_hidden');

        }else {
            $date_time = request()->input('date_time');
        }
        $data = array(
            'name'=>$name,
            'date_time'=>$date_time,
            'description'=>$description,
            'free_event'=>$entry_type,
            'price'=>$price,
            'available_tickets'=>$available_tickets,
            'photo'=>$photo_url,
        );

        $event->update($data);
        return redirect()->route('admin.events.index');
    }

    public function destroy(Event $event)
    {
        $event->delete();
        return redirect()->route('admin.events.index');
    }



}
