<?php

use Illuminate\Database\Seeder;
Use Carbon\Carbon;
class Postseed extends Seeder
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
            DB::table('posts')->insert([
                'author_id' => mt_rand(5,20),
                'content' => 'https://source.unsplash.com/random',
                'caption' => $faker->sentence(200, true),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'created_at' => Carbon::now()->toDateTimeString(),
            ]);
        }
    }
}
