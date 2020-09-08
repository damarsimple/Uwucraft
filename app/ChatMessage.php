<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ChatMessage extends Model
{
    protected $fillable = ['from_id', 'to_id', 'message'];
    public function from(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function to(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
