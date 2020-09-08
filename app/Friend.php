<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Friend
 *
 * @property int $id
 * @property int $user_id
 * @property int $friend_with
 * @property int $is_friend
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\User $friend
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|Friend newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Friend newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Friend query()
 * @method static \Illuminate\Database\Eloquent\Builder|Friend whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Friend whereFriendWith($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Friend whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Friend whereIsFriend($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Friend whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Friend whereUserId($value)
 * @mixin \Eloquent
 */
class Friend extends Model
{
    protected $fillable = ['user_id', 'friends_id', 'is_friend'];
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function friend(): BelongsTo
    {
        return $this->belongsTo(User::class, 'friends_id');
    }
}
