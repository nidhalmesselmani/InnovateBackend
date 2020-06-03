<?php

namespace App\Http\Controllers;
use App\Citie

use Illuminate\Http\Request;

class CityController extends Controller
{
    //


      public function getCitiesByGovernorateID(Request $request){
      	return	Citie::where('governorate_id', '=', $request->input('governorate_id'))->get();
      }
}
