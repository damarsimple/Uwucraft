<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Reaction;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(Reaction::class, function (Faker $faker) {
    return [
        'author_id' => mt_rand(5, 20),
        'post_id' => mt_rand(1, 10),
        'content' => mt_rand(1, 3),
        'updated_at' => Carbon::now()->toDateTimeString(),
        'created_at' => Carbon::now()->toDateTimeString(),
    ];
});
