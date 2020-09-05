<?php

use Illuminate\Database\Seeder;
Use Carbon\Carbon;
class Commentseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            $faker = Faker\Factory::create();
            DB::table('comments')->insert([
                'author_id' => mt_rand(5,10),
                'post_id' => mt_rand(1,10),
                'content' => $faker->sentence(20, true),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'created_at' => Carbon::now()->toDateTimeString(),
            ]);
        }
    }
}
