<?php


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
        $this->call(ItemSeed::class);
        $this->call(Postseed::class);
        $this->call(Commentseed::class);
        $this->call(Reactionseed::class);
    }
}
