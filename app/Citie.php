<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Citie extends Model
{
    //

   protected $fillable = [
        'governorate_id','name'
    ];    
    public $timestamps = false;
}
