<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingTubing extends Model
{
    use HasFactory;
    protected $table = 'booking_tubing';
    protected $fillable = ['time_slot_id', 'type_id', 'quantity', 'user_name', 'phone', 'service_id'];
    public $timestamps=false;

    public function timeSlot()
    {
        return $this->belongsTo(TimeSlot::class, 'time_slot_id');
    }

    public function tubingType()
    {
        return $this->belongsTo(TubingType::class, 'type_id');
    }
    public function service()
    {
        return $this->belongsTo(Service::class);
    }

}
