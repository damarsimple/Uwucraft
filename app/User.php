<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

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
        'remember_token', 'email', 'x', 'y', 'z', 'world', 'regdate', 'updated_at', 'lastlogin', 'realname', 'ip', 'regip', 'totp', 'yaw', 'pitch',
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
