<?php

use App\ChatMessage;
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
      
        factory(ChatMessage::class, 40)->create();
 
    }
}
