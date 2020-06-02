<?php

namespace App\Http\Controllers;
use App\Place;

use Illuminate\Http\Request;

class LocationController extends Controller
{
    //


    public function getLocations(Request $request) {
    	return Places::all();
    }

    public function createLocation(Request $request) {
      // logic to create a student record goes here

      return Place::create($request->all());
    }
}
