<?php

use Illuminate\Database\Seeder;
use App\Review;

class Reviewseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
        factory(Review::class, 40)->create();
 
    }
}
