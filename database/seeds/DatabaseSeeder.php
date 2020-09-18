<?php

use App\Advancement;
use App\ChatMessage;
use App\Friend;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UserSeed::class);
        $this->call(ItemSeed::class);
        $this->call(Postseed::class);
        $this->call(Commentseed::class);
        $this->call(Reactionseed::class);
        $this->call(Reviewseed::class);
        $this->call(ChatMessageseed::class);
        $this->call(Friendseed::class);
        $this->call(AdvancementSeed::class);
    }
}
