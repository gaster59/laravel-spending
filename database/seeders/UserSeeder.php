<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 50; $i++) {
            $user = User::create([
                'name' => $faker->firstName() . ' ' . $faker->lastName,
                'email' => $faker->unique()->safeEmail,
                'phone' => $faker->phoneNumber,
                'address' => $faker->streetAddress,
                'role_id' => random_int(1,2),
                'password' => \Hash::make('password'),
                'remember_token' => \Str::random(10),
            ]);
            $user->createToken(env('NAME_TOKEN'))->accessToken;
        }
    }
}
