<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = ['parks_gardens_id', 'service_id', 'amount_booked', 'booking_status', 'time_booked', 'duration_booked'];
}
