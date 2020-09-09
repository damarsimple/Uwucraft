<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
use App\User;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        factory(User::class, 20)->create();
        $faker = Faker\Factory::create();
        DB::table('users')->insert([
            'username' => 'damar',
            'password' => password_hash('123456', PASSWORD_DEFAULT),
            'email' => $faker->email,
            'ip' => $faker->ipv4,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);
     
    }
}
