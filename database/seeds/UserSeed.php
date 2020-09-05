<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 20; $i++) {
            DB::table('users')->insert([
                'username' => $faker->userName,
                'password' => password_hash($faker->password(), PASSWORD_DEFAULT),
                'email' => $faker->email,
                'ip' => $faker->ipv4,
                'UUID' => $faker->uuid,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
        DB::table('users')->insert([
            'username' => 'damar',
            'password' => password_hash('123456', PASSWORD_DEFAULT),
            'email' => $faker->email,
            'ip' => $faker->ipv4,
            'UUID' => $faker->uuid,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
    }
}
