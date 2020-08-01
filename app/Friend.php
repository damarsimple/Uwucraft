<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function friend()
    {
        return $this->belongsTo('App\User', 'friend_with', 'id');
    }
}
