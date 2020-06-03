<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    //
    protected $fillable = ['coordinates','contaminated','city_id','name','number_of_visits','number_of_reports'];
    public $timestamps = false;
}
