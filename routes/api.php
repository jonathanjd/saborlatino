<?php

use App\ChatMessage;
use App\ChatUser;
use App\Events\ChatLive;
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

  Route::post('test-pusher', function(Request $request){

    if ($request->email === 'coaching2424@gmail.com') {
      # code...
        $ChatMessage = new ChatMessage();
        $ChatMessage->message = $request->mensaje;
        $ChatMessage->chat_users_send = 0;
        $ChatMessage->chat_users_receives = $request->chat_users_receives;
        $ChatMessage->save();

        $searchChatUser = ChatUser::find($request->chat_users_receives);

        if ($searchChatUser) {
          # code...
          event(new ChatLive($request->chat_users_receives, $searchChatUser->email));
        }

        return response()->json(['msj' => 'success'], 200);
    } else {
      # code...
      $myChatUser = ChatUser::where('email', $request->email)->first();
      
      if ($myChatUser) {
        # code...
        $ChatMessage = new ChatMessage();
        $ChatMessage->message = $request->mensaje;
        $ChatMessage->chat_users_send = $myChatUser->id;
        $ChatMessage->chat_users_receives = 0;
        $ChatMessage->save();
        $myMessageUser = ChatMessage::with('userChat')->whereIn('chat_users_send', [$myChatUser->id, 0])->whereIn('chat_users_receives',[$myChatUser->id, 0])->get();
        event(new ChatLive($myChatUser->id, $myChatUser->email));
        return response()->json(['messages' => $myMessageUser], 200);
      } else {
        $chatUser = new ChatUser();
        $chatUser->email = $request->email;
        $chatUser->name = $request->name;
        $chatUser->save();
  
        $ChatMessage = new ChatMessage();
        $ChatMessage->message = $request->mensaje;
        $ChatMessage->chat_users_send = $chatUser->id;
        $ChatMessage->chat_users_receives = 0;
        $ChatMessage->save();
        event(new ChatLive($chatUser->id, $chatUser->email));
        return response()->json(['msj' => 'success'], 200);
      }
    }
    
  });

  Route::post('send-email', function(Request $request){

    Mail::to('info@palante-movingforwardcoaching.com')->send(new MainPalante($request->name, $request->email, $request->message));

    return response()->json(['msj' => true], 200);

  });

  Route::get('chat-users', 'ChatLiveController@getUsers');
  Route::get('chat-message-user/{id}', 'ChatLiveController@getMessageUser');