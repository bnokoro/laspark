<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['service_name', 'description', 'service_image', 'service_icon'];




public function bookings()

{
     return $this->hasMany('App\Booking');
}

}
