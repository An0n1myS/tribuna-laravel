<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingSkating extends Model
{
    use HasFactory;
    protected $table = 'booking_skating';
    protected $fillable = ['time_slot_id', 'skate_id', 'quantity', 'user_name', 'phone', 'service_id'];
    public $timestamps=false;

    public function service()
    {
        return $this->belongsTo(Service ::class);
    }

    public function timeSlot()
    {
        return $this->belongsTo(TimeSlot::class, 'time_slot_id');
    }

    public function skatingList()
    {
        return $this->belongsTo(SkatingList::class, 'skate_id');
    }
}
