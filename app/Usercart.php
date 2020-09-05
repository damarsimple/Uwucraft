<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Usercart
 *
 * @property int $id
 * @property int $user_id
 * @property int $item_id
 * @property int $amount
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Item $item
 * @method static \Illuminate\Database\Eloquent\Builder|Usercart newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Usercart newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Usercart query()
 * @method static \Illuminate\Database\Eloquent\Builder|Usercart whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Usercart whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Usercart whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Usercart whereItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Usercart whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Usercart whereUserId($value)
 * @mixin \Eloquent
 */
class Usercart extends Model
{
    public $fillable = ['user_id', 'item_id', 'amount'];
    public function item(): BelongsTo
    {
        return $this->belongsTo(Item::class);
    }
}
