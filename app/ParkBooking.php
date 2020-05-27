<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParkBooking extends Model
{
    protected $fillable = ['park_name', 'guest_number', 'event_type'];

      public function user()
    {
        return $this->belongsTo('App\User');
    }

}
