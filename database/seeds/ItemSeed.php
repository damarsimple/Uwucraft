<?php

use Illuminate\Database\Seeder;
Use Carbon\Carbon;
class ItemSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $json = file_get_contents('https://raw.githubusercontent.com/PrismarineJS/minecraft-data/master/data/pc/1.8/items.json');
        $table = json_decode($json, true);
        for ($i = 0; $i < count($table); $i++) {
            $faker = Faker\Factory::create();
            DB::table('items')->insert([
                'author_id' => mt_rand(1,20),
                'item_name' => $table[$i]['displayName'],
                'description' => $faker->sentence(6,  true),
                'type' => 'misc',
                'minecraft_item_id' => 'minecraft:' . $table[$i]['name'],
                'minecraft_item_shorthand' => $table[$i]['name'],
                'price' => mt_rand(0, 1000),
                'counter' => 0,
                'view' => 0,
                'updated_at' => Carbon::now()->toDateTimeString(),
                'created_at' => Carbon::now()->toDateTimeString(),
            ]);
            echo "seed $i";
        }
    }
}
