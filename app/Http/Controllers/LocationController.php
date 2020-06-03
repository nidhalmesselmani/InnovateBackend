<?php

namespace App\Http\Controllers;

use App\Place;
use App\Citie;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    //


    public function getLocations(Request $request) {
    	return Place::all();
    }

    public function createLocation(Request $request) {
      // logic to create a student record goes here

      return Place::create($request->all());
    }

 
     public function getPlacesByCityID(Request $request){
      	return	Citie::where('city_id', '=', $request->input('city_id'))->get();
      }
   
}
