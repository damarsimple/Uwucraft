<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Post;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'author_id' => mt_rand(5, 20),
        'content' => 'https://source.unsplash.com/random',
        'caption' => $faker->sentence(200, true),
        'updated_at' => Carbon::now()->toDateTimeString(),
        'created_at' => Carbon::now()->toDateTimeString(),
    ];
});
