<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function getUsers(Request $request) {
    	return User::all();
    }

    public function createUser(Request $request) {
      // logic to create a student record goes here

      return User::create($request->all());
    }
    
}
