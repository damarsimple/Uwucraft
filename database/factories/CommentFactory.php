<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Comment;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(Comment::class, function (Faker $faker) {
    return [
        'author_id' => mt_rand(5, 10),
        'post_id' => mt_rand(1, 10),
        'content' => $faker->sentence(20, true),
        'updated_at' => Carbon::now()->toDateTimeString(),
        'created_at' => Carbon::now()->toDateTimeString(),
    ];
});
