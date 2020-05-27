<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['service', 'description'];




public function bookings()

{
     return $this->hasMany('App\Booking');
}

}
