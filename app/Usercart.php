<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Usercart extends Model
{
    //

    public function item(): BelongsTo{
        return $this->belongsTo(Item::class);
    }
}
