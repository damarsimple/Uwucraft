<?php

use Illuminate\Database\Seeder;
use App\Friend;

class Friendseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        factory(Friend::class, 40)->create();
        for ($i = 1; $i < 20; $i++) {
            DB::table('friends')->insert([
                'user_id' => 21,
                'friends_id' => $i,
                'is_friend' => true,
            ]);
        }
    
    }
}
