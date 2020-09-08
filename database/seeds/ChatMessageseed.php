<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ChatMessageseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 1500; $i++) {
            $faker = Faker\Factory::create();
            DB::table('chat_messages')->insert([
                'from_id' => mt_rand(1, 10),
                'to_id' => mt_rand(1, 10),
                'message' => $faker->sentence(20, true),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'created_at' => Carbon::now()->toDateTimeString(),
            ]);
        }
    }
}
