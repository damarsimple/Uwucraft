<?php

use Illuminate\Database\Seeder;
Use Carbon\Carbon;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);
        /** Populate Table using dummy items */
        /** Not really dummy tho */
        $json = file_get_contents('https://raw.githubusercontent.com/PrismarineJS/minecraft-data/master/data/pc/1.8/items.json');
        $table = json_decode($json, true);
        for ($i = 0; $i < count($table); $i++) {
            $faker = Faker\Factory::create();
            DB::table('itemsdata')->insert([
                'name' => $table[$i]['displayName'],
                'seller' => $faker->name,
                'description' => 'Items that called ' . $table[$i]['displayName'],
                'type' => 'misc',
                'minecraft_item_id' => 'minecraft:' . $table[$i]['name'],
                'minecraft_item_shorthand' => $table[$i]['name'],
                'price' => rand(0, 1000),
                'counter' => 0,
                'updated_at' => Carbon::now()->toDateTimeString(),
                'created_at' => Carbon::now()->toDateTimeString(),
            ]);
        }
        $this->call(Itemsdata::class);
    }
}
