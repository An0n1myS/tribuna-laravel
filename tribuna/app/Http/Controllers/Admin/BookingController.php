<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BookingSkating;
use App\Models\BookingTubing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookingController extends Controller
{

    public function booking()
    {
        $tableTubing_datas = BookingTubing::with('timeSlot', 'tubingType')->get();
        $tableSkating_datas = BookingSkating::with('timeSlot', 'skatingList')->get();

        $user = Auth::user();

        return view('admin.bookings.index', compact(['tableTubing_datas','tableSkating_datas', 'user']));
    }
    public function delete_skate(BookingSkating $booking)
    {
        $booking->delete();
        return redirect()->route('admin.bookings.index');
    }
    public function delete_tubing(BookingTubing $booking)
    {
        $booking->delete();
        return redirect()->route('admin.bookings.index');
    }


}
