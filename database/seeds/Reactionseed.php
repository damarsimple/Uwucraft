<?php

use Illuminate\Database\Seeder;
Use Carbon\Carbon;
class Reactionseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            DB::table('reactions')->insert([
                'author_id' => mt_rand(5,20),
                'post_id' => mt_rand(1,10),
                'content' => mt_rand(1,3),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'created_at' => Carbon::now()->toDateTimeString(),
            ]);
        }
    }
}
