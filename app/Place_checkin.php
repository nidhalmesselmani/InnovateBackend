<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place_checkin extends Model
{
    //
    protected $fillable = [
        'user_id', 'place_id','checkin','checkout'
    ];    
    public $timestamps = false;
}
