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
                'user_id' => 1,
                'post_id' => rand(1,10),
                'content' => rand(1,3),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'created_at' => Carbon::now()->toDateTimeString(),
            ]);
        }
    }
}
