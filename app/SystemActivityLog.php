<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\SystemActivityLog
 *
 * @property int $id
 * @property string $type
 * @property int $online
 * @property float $ping
 * @property string|null $data
 * @property string|null $exception
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SystemActivityLog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SystemActivityLog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SystemActivityLog query()
 * @method static \Illuminate\Database\Eloquent\Builder|SystemActivityLog whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemActivityLog whereData($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemActivityLog whereException($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemActivityLog whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemActivityLog whereOnline($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemActivityLog wherePing($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemActivityLog whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SystemActivityLog whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class SystemActivityLog extends Model
{
    //
}
