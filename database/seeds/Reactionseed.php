<?php

use Illuminate\Database\Seeder;

use App\Reaction;

class Reactionseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
   
        factory(Reaction::class, 40)->create();
 
    }
}
