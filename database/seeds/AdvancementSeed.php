<?php

use App\Advancement;
use Illuminate\Database\Seeder;

class AdvancementSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $arr =  csvToArray(storage_path('advancement.csv'));
        foreach ($arr as $ar) {
            Advancement::create($ar);
        }
    }
}
