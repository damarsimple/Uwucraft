<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Userdata
 *
 * @property int $id
 * @property int $user_id
 * @property string $UUID
 * @property float $health
 * @property int $hunger
 * @property float $exp
 * @property int $level
 * @property float $exhaustion
 * @property float $saturation
 * @property int $air
 * @property string $gamemode
 * @property float $money
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read User $owner
 * @method static \Illuminate\Database\Eloquent\Builder|Userdata newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Userdata newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Userdata query()
 * @method static \Illuminate\Database\Eloquent\Builder|Userdata whereAir($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Userdata whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Userdata whereExhaustion($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Userdata whereExp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Userdata whereGamemode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Userdata whereHealth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Userdata whereHunger($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Userdata whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Userdata whereLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Userdata whereMoney($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Userdata whereSaturation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Userdata whereUUID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Userdata whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Userdata whereUserId($value)
 * @mixin \Eloquent
 */
class Userdata extends Model
{
    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
