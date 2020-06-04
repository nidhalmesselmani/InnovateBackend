<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('places', 'LocationController@getLocations');
Route::get('place', 'LocationController@getLocation');
Route::post('places', 'LocationController@createLocation');


Route::get('users', 'UserController@getUsers');
Route::post('users', 'UserController@CreateUser');
Route::get('user_by_cin','UserController@getUserByCin');

Route::get('checkins', 'PlaceCheckInController@getCheckInsByUserId');
Route::post('checkins', 'PlaceCheckInController@createCheckIn');

Route::post('governorates', 'GovernorateController@createGovernorate');
Route::post('cities', 'CityController@createCity');

Route::get('governorates','GovernorateController@getGovernorates');
Route::get('city_by_governorate_id','CityController@getCitiesByGovernorateID');
Route::get('place_by_city_id','LocationController@getPlacesByCityID');


Route::post('report_place', 'LocationController@reportPlace');

