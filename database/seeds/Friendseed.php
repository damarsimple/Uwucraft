<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class Friendseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 40; $i++) {

            DB::table('friends')->insert([
                'user_id' => mt_rand(1, 20),
                'friends_id' => mt_rand(1, 20),
                'is_friend' => true,
                'updated_at' => Carbon::now()->toDateTimeString(),
                'created_at' => Carbon::now()->toDateTimeString(),
            ]);
        }
    }
}
