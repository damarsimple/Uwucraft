<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class Reviewseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 1000; $i++) {
            DB::table('reviews')->insert([
                'author_id' => mt_rand(1, 20),
                'item_id' => mt_rand(1, 500),
                'score' => mt_rand(1, 5),
                'caption' => $faker->sentence(6),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
