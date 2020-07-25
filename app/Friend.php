<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    protected $table = 'users_friends';
    protected $primaryKey = 'username';
}
