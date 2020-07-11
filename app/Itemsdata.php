<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Itemsdata extends Model
{
    protected $table = 'itemsdata';
    protected $fillable = [
        'name',
        'seller',
        'description',
        'type',
        'minecraft_item_id',
        'minecraft_item_shorthand',
        'price',
        'counter',
    ];
}
