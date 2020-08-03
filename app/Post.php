<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    protected $hidden = ['user_id'];
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
    public function reactions(): HasMany
    {
        return $this->hasMany(Reaction::class);
    }
}
