<?php

namespace App\Http\Controllers;

use App\ChatMessage;
use App\ChatUser;
use Illuminate\Http\Request;

class ChatLiveController extends Controller
{
    //

    public function getUsers()
    {
        # code...
        $myChatUser = ChatUser::all();
        return response()->json(['myChatUser' => $myChatUser], 200);
    }

    public function getMessageUser($id)
    {
        # code...
        $myMessageUser = ChatMessage::with('userChat')->whereIn('chat_users_send', [$id, 0])->whereIn('chat_users_receives',[$id, 0])->get();

        return response()->json(['myMessageUser' => $myMessageUser], 200);
    }
}
