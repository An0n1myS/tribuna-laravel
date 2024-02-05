<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingEvent extends Model
{
    use HasFactory;
    protected $table = 'booking_event';
    protected $fillable = ['user_name', 'phone', 'mail', 'count', 'event_id', 'booking_date','status'];
    public $timestamps = false;

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
