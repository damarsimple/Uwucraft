<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Laravel\Scout\Searchable;

class UserData extends Model
{
    use Searchable;
    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
