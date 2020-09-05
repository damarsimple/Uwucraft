<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

/**
 * App\User
 *
 * @property int $id
 * @property string $username
 * @property string|null $realname
 * @property string $password
 * @property string|null $ip
 * @property int|null $lastlogin
 * @property float $x
 * @property float $y
 * @property float $z
 * @property string $world
 * @property int $regdate
 * @property string|null $regip
 * @property float|null $yaw
 * @property float|null $pitch
 * @property string|null $email
 * @property int $isLogged
 * @property int $hasSession
 * @property string|null $totp
 * @property string|null $UUID
 * @property string|null $remember_token
 * @property int $is_admin
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Client[] $clients
 * @property-read int|null $clients_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Comment[] $comment
 * @property-read int|null $comment_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Friend[] $friend
 * @property-read int|null $friend_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Post[] $posts
 * @property-read int|null $posts_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Token[] $tokens
 * @property-read int|null $tokens_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Useradvancement[] $useradvancement
 * @property-read int|null $useradvancement_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Usercart[] $usercart
 * @property-read int|null $usercart_count
 * @property-read \App\Userdata|null $userdata
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Usertransactionhistory[] $usertransactionhistory
 * @property-read int|null $usertransactionhistory_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereHasSession($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsAdmin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereIsLogged($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLastlogin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePitch($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRealname($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRegdate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRegip($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTotp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUUID($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUsername($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereWorld($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereX($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereY($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereYaw($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereZ($value)
 * @mixin \Eloquent
 */
class User extends Authenticatable
{
    use Notifiable, HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username', 'realname', 'name', 'email', 'password', 'lastlogin', 'regdate', 'regip', 'ip', 'UUID'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'email', 'x', 'y', 'z', 'world', 'regdate', 'updated_at', 'lastlogin', 'realname', 'ip', 'regip', 'totp', 'yaw', 'pitch',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function friend(): HasMany
    {
        return $this->hasMany(Friend::class);
    }
    public function usercart(): HasMany
    {
        return $this->hasMany(Usercart::class);
    }
    public function useradvancement(): HasMany
    {
        return $this->hasMany(Useradvancement::class);
    }
    public function userdata(): HasOne
    {
        return $this->HasOne(Userdata::class);
    }
    public function usertransactionhistory(): HasMany
    {
        return $this->hasMany(Usertransactionhistory::class);
    }
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }
    public function comment(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}
