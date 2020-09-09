<?php

use Illuminate\Database\Seeder;
use App\Comment;

class Commentseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      ;
        factory(Comment::class, 40)->create();
     
    }
}
