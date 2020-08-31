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
                'password' => password_hash($faker->password(), PASSWORD_DEFAULT),
                'email' => $faker->email,
                'ip' => $faker->ipv4,
                'UUID' => $faker->uuid,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
