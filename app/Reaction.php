<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * App\Reaction
 *
 * @property int $id
 * @property int $author_id
 * @property int $post_id
 * @property string $content
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\User $author
 * @property-read \App\Post $post
 * @method static \Illuminate\Database\Eloquent\Builder|Reaction newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Reaction newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Reaction query()
 * @method static \Illuminate\Database\Eloquent\Builder|Reaction whereAuthorId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reaction whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reaction whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reaction whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reaction wherePostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Reaction whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Reaction extends Model
{
    protected $fillable = ['author_id', 'post_id', 'content'];
    protected $hidden = ['author_id'];
    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
