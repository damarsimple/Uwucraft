<?php

namespace App;


use Illuminate\Database\Eloquent\Model;


/**
 * App\Advancement
 *
 * @property int $id
 * @property string $icon
 * @property string $name
 * @property string $description
 * @property string|null $parent
 * @property string $requirements
 * @property string $namespace
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Advancement newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Advancement newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Advancement query()
 * @method static \Illuminate\Database\Eloquent\Builder|Advancement whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Advancement whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Advancement whereIcon($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Advancement whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Advancement whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Advancement whereNamespace($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Advancement whereParent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Advancement whereRequirements($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Advancement whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Advancement extends Model
{
}
