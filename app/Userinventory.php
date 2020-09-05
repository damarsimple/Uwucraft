<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Userinventory
 *
 * @property int $id
 * @property int $user_id
 * @property int $item_id
 * @property string $type
 * @property int $amount
 * @property int|null $damage
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read User $owner
 * @method static \Illuminate\Database\Eloquent\Builder|Userinventory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Userinventory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Userinventory query()
 * @method static \Illuminate\Database\Eloquent\Builder|Userinventory whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Userinventory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Userinventory whereDamage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Userinventory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Userinventory whereItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Userinventory whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Userinventory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Userinventory whereUserId($value)
 * @mixin \Eloquent
 */
class Userinventory extends Model
{
    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
