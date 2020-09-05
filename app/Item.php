<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\App;

/**
 * App\Item
 *
 * @property int $id
 * @property int $author_id
 * @property string $item_name
 * @property string $description
 * @property string $type
 * @property string $minecraft_item_id
 * @property string $minecraft_item_shorthand
 * @property int $price
 * @property int $counter
 * @property int $view
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\User $author
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Review[] $review
 * @property-read int|null $review_count
 * @method static \Illuminate\Database\Eloquent\Builder|Item newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Item newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Item query()
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereAuthorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereCounter($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereItemName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereMinecraftItemId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereMinecraftItemShorthand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Item whereView($value)
 * @mixin \Eloquent
 */
class Item extends Model
{
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function review(): HasMany
    {
        return $this->hasMany(Review::class);
    }
    public function increaseView()
    {
        dispatch(new App\App\Jobs\IncreaseItemViewCount($this));
        return $this;
    }
}
