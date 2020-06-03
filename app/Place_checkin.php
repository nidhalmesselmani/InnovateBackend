<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place_checkin extends Model
{
    //
    protected $fillable = [
        'user_id', 'place_id','checkInTime','checkOutTime'
    ];    
    public $timestamps = false;
}
