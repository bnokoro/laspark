<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParksGarden extends Model
{
    protected $fillable = ['price', 'description', 'availability', 'park_name', 'image', 'trees', 'land_area', 'toilets', 'latitude', 'longitude'];
}
