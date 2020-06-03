<?php

namespace App\Http\Controllers;

use App\Governorate;
use Illuminate\Http\Request;

class GovernorateController extends Controller
{
    //

    
    public function createGovernorate(Request $request) {
      // logic to create a student record goes here

      return Governorate::create($request->all());
    }

    public function getGovernorates(Request $request) {
    	return Governorate::all();
    }


  
}
