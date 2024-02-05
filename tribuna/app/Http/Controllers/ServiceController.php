<?php

namespace App\Http\Controllers;

use App\Models\BookingSkating;
use App\Models\BookingTubing;
use App\Models\Service;
use App\Models\SkatingList;
use App\Models\TimeSlot;
use App\Models\TubingType;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function show(Service $service)
    {
        $slots = TimeSlot::where('available', true)->get();
        $skatings = SkatingList::where('count', '>', 0)->get();
        $tubingTypes = TubingType::where('count','>',0)->get();

        return view('services.show', compact(['service','slots', 'skatings', 'tubingTypes']));
    }



    public function booking_skating(Request $request)
    {
        // Логика проверки доступности времени и наличия коньков
        $timeSlot = $request->input('time_slot');
        $size = $request->input('size');
        $skatingCount = $request->input('skating_count');

        $isTimeSlotAvailable = TimeSlot::where('id', $timeSlot)->where('available', 1)->exists();
        $areSkatesAvailable = SkatingList::where('id', $size)->where('count', '>=', $skatingCount)->exists();

        if (!$isTimeSlotAvailable || !$areSkatesAvailable) {
            // Вывести сообщение об ошибке
            return redirect()->back()->with('error', 'Час або ковзани недоступні. Будь ласка, виберіть інший час або розмір.');
        }

        // Логика сохранения бронирования в базе данных
        $data = [
            "user_name" => $request->input('user_name'),
            "service_id" => $request->input('service_id'),
            "phone" => $request->input('phone'),
            "quantity" => $skatingCount,
            "time_slot_id" => $timeSlot,
            "skate_id" => $size,
        ];

        BookingSkating::create($data);

        // Обновление статуса временного слота и уменьшение количества доступных коньков

        SkatingList::where('id', $size)->decrement('count', $skatingCount);

        session()->flash('success', 'Бронювання ковзанів успішно завершено.');


        return redirect()->route('services.index')->with('success', 'Бронювання ковзанів успішно завершено.');
    }

    public function booking_tubing(Request $request){
        // Логика проверки доступности времени и наличия коньков
        $timeSlot = $request->input('time_slot');
        $type = $request->input('tubing_type');
        $tubingCount = $request->input('tubing_count');

        $isTimeSlotAvailable = TimeSlot::where('id', $timeSlot)->where('available', 1)->exists();
        $areTubingAvailable = TubingType::where('id', $type)->where('count', '>=', $tubingCount)->exists();

        if (!$isTimeSlotAvailable || !$areTubingAvailable) {
            // Вывести сообщение об ошибке
            return redirect()->back()->with('error', 'Час або тюбінги недоступні. Будь ласка, виберіть інший час або тип.');
        }

        $user_name = request()->input('user_name');
        $service_id = request()->input('service_id');
        $phone = request()->input('phone');

        $data = array(
            "user_name"=>$user_name,
            "service_id"=>$service_id,
            "phone"=>$phone,
            "quantity"=>$tubingCount,
            "time_slot_id"=>$timeSlot,
            "type_id"=>$type
        );

        BookingTubing::create($data);

        TubingType::where('id', $type)->decrement('count', $tubingCount);

        session()->flash('success', 'Бронювання тюбінгів успішно завершено.');


        return redirect()->route('services.index');
    }
}
