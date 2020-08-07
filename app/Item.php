<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
