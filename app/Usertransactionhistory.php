<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Usertransactionhistory
 *
 * @property int $id
 * @property int $user_id
 * @property int $item_id
 * @property int $amount
 * @property int $received
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Usertransactionhistory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Usertransactionhistory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Usertransactionhistory query()
 * @method static \Illuminate\Database\Eloquent\Builder|Usertransactionhistory whereAmount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Usertransactionhistory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Usertransactionhistory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Usertransactionhistory whereItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Usertransactionhistory whereReceived($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Usertransactionhistory whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Usertransactionhistory whereUserId($value)
 * @mixin \Eloquent
 */
class Usertransactionhistory extends Model
{
    //
}
