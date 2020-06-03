<?php

namespace App\Http\Controllers;

use App\Governorate;
use Illuminate\Http\Request;

class GovernorateController extends Controller
{
    //


    public function getGovernorates(Request $request) {
    	return Governorate::all();
    }


  
}
