<?php

use Illuminate\Http\Request;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/users', 'UserController@index');

// public ad endpoints
Route::get('/ads', 'AdController@index');
Route::get('/ads/{ad}', 'AdController@show');


// auth endpoints (user&admin)
Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function () {

	Route::post('login', 'AuthController@login'); 
  Route::post('logout', 'AuthController@logout');
  // Route::post('/admin/login', 'AuthController@adminLogin');

});


// protected endpoints
Route::group([
  'middleware' => 'auth:api'
], function () {

  Route::post('me', 'AuthController@me');
  Route::post('/ads', 'AdController@store');
  Route::post('/ads/{ad}', 'AdController@update');
  Route::post('/ads/{ad}', 'AdController@destroy');

});
