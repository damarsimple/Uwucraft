<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Review;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(Review::class, function (Faker $faker) {
    return [
        'author_id' => mt_rand(1, 20),
        'item_id' => mt_rand(1, 500),
        'score' => mt_rand(1, 5),
        'caption' => $faker->sentence(6),
        'created_at' => Carbon::now(),
        'updated_at' => Carbon::now(),
    ];
});
