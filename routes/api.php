<?php

use App\Events\Event;
use App\Mail\MainPalante;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
  ], function ($router) {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::get('is-login', 'AuthController@isLogin');
  });

  Route::get('reviews/web', 'ReviewController@getWeb');
  Route::resource('reviews', 'ReviewController');
  Route::get('packages/web', 'PackageController@getWeb');
  Route::resource('packages', 'PackageController');
  Route::resource('detailpackages', 'DetailPackageController');

  Route::post('test-pusher', function(){
    event(new Event('hello world'));
    return response()->json(['msj' => 'success'], 200);
  });

  Route::post('send-email', function(Request $request){

    Mail::to($request->email)->send(new MainPalante($request->name, $request->email, $request->message));

  });