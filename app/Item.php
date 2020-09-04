<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\App;

class Item extends Model
{
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function review(): HasMany
    {
        return $this->hasMany(Review::class);
    }
    public function increaseView()
    {
        dispatch(new App\App\Jobs\IncreaseItemViewCount($this));
        return $this;
    }
}
