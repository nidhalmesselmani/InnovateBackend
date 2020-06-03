<?php

namespace App\Http\Controllers;

use App\Place;


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
      	return	Place::where('city_id', '=', $request->input('city_id'))->get();
      }
   
   public function reportPlace(Request $request){
   	$place = Place::find($request->input('place_id'));

   	$place->number_of_reports = $place->number_of_reports + 1;

   	  if($place->number_of_reports > 10){
               $place->contaminated = 'Y';
               $place->save();
      }
      elseif ($place->number_of_reports <= 10 and $place->number_of_reports > 2) {

        $place->contaminated = 'S';
        $place->save();
      }
      else {
        $place->contaminated = 'N';
        $place->save();
      }
   }
}
