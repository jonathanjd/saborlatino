<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ChatMessage extends Model
{
    //
    protected $fillbale = ['message', 'chat_users_send', 'chat_users_receives'];

    public function userChat()
    {
        # code...
        return $this->belongsTo(ChatUser::class, 'chat_users_send');
    }
}
