<?php

namespace App\Http\Controllers;
use App\Place_checkin;
use Illuminate\Http\Request;


class PlaceCheckInController extends Controller
{
    //

    public function createCheckIn(Request $request) {
      // logic to create a student record goes here

      return Place_checkin::create($request->all());
    }

    public function getCheckInsByUserId(Request $request) {
    	// PropertyUser::where('user_id', '=', Auth::user()->id)->get();
    	Place_checkin::where('user_id', '=', $request->id)->get();
    }
}