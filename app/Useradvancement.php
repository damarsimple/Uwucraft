<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Useradvancement
 *
 * @property int $id
 * @property int $user_id
 * @property int $advancements_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read User $owner
 * @method static \Illuminate\Database\Eloquent\Builder|Useradvancement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Useradvancement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Useradvancement query()
 * @method static \Illuminate\Database\Eloquent\Builder|Useradvancement whereAdvancementsId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Useradvancement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Useradvancement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Useradvancement whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Useradvancement whereUserId($value)
 * @mixin \Eloquent
 */
class Useradvancement extends Model
{
    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
