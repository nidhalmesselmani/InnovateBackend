<?php

namespace App\Http\Controllers;
use App\Place_checkin;
use App\Place;
use Illuminate\Http\Request;


class PlaceCheckInController extends Controller
{
    //

    public function createCheckIn(Request $request) {

      $place = Place::find($request->input('place_id'));

      $place->number_of_visits = $place->number_of_visits + 1;

      if($place->number_of_visits > 2){
               $place->contaminated = 'Y';
               $place->save();
      }
      elseif ($place->number_of_visits <= 2 and $place->number_of_visits > 0) {

        $place->contaminated = 'S';
        $place->save();
      }
      else {
        $place->contaminated = 'N';
        $place->save();
      }
      return Place_checkin::create($request->all());
    }

    public function getCheckInsByUserId(Request $request) {
    	// PropertyUser::where('user_id', '=', Auth::user()->id)->get();
      return	Place_checkin::where('user_id', '=', $request->input('user_id'))->get();
    }



}
