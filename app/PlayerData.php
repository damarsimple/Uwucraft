<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PlayerData extends Model
{
    protected $table = 'mc_playerdata';
    protected $primaryKey = 'username';
    public $timestamps = false;
}
