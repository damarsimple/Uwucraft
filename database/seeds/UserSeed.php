<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 20; $i++) {
            $faker = Faker\Factory::create();
            DB::table('users')->insert([
                'username' => $faker->userName,
                'password' => $faker->password(),
                'email' => $faker->email,
                'ip' => $faker->ipv4,
                'UUID' => $faker->uuid,
            ]);
        }
    }
}
