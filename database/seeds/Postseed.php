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
                'user_id' => 1,
                'content' => $faker->sentence(20, true),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'created_at' => Carbon::now()->toDateTimeString(),
            ]);
        }
    }
}
