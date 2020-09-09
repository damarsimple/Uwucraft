<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\ChatMessage;
use Faker\Generator as Faker;
use Carbon\Carbon;

$factory->define(ChatMessage::class, function (Faker $faker) {
    return [
        'from_id' => mt_rand(1, 10),
        'to_id' => mt_rand(1, 10),
        'message' => $faker->sentence(20, true),
        'updated_at' => Carbon::now()->toDateTimeString(),
        'created_at' => Carbon::now()->toDateTimeString(),
    ];
});
