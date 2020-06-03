<?php

namespace App\Http\Controllers;
use App\Place_checkin;
use App\Place;
use Illuminate\Http\Request;


class PlaceCheckInController extends Controller
{
    //

    public function createCheckIn(Request $request) {
      // logic to create a student record goes here
      // return $request->all();
      $place_temp = Place::where('id','=', $request->input('place_id'))->get()->first();
      $place_temp->number_of_visits = $place_temp->number_of_visits + 1;

      if($place_temp->number_of_visits > 2){

        $place_temp->contaminated = 'Y';
        $place = Place::findOrFail($place_temp->id);
        $place->save();

      }
      elseif ($place_temp->number_of_visits <= 2 and $place_temp->number_of_visits > 0) {
        # code...
        $place_temp->contaminated = 'S';
        $place = Place::findOrFail($place_temp->id);
        $place->save($place_temp);
      }
      else {
        $place_temp->contaminated = 'N';
        $place = Place::findOrFail($place_temp->id);
        $place->save($place_temp);
      }
      return Place_checkin::create($request->all());
    }

    public function getCheckInsByUserId(Request $request) {
    	// PropertyUser::where('user_id', '=', Auth::user()->id)->get();
      return	Place_checkin::where('user_id', '=', $request->input('user_id'))->get();
    }



}
