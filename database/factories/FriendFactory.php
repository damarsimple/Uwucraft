<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Friend;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(Friend::class, function (Faker $faker) {
    return [
        'user_id' => mt_rand(1, 20),
        'friends_id' => mt_rand(1, 20),
        'is_friend' => true,
        'updated_at' => Carbon::now()->toDateTimeString(),
        'created_at' => Carbon::now()->toDateTimeString(),
    ];
});
