<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ParksGarden extends Model
{
    protected $fillable = ['price', 'description', 'availability', 'status', 'trees', 'land_area', 'toilets'];
}
