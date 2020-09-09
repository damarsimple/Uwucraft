<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserInventory extends Model
{
    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
