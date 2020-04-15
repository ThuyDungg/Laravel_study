<?php

use Illuminate\Database\Seeder;

use Faker\Factory;
use App\Models\User;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();

        for ($i = 0; $i < 10; $i++) {
            User::create([
            	'name' => $faker->name,
            	'birthday' => $faker->dateTime()->format('Y-m-d H:i:s'),
            	'address' => $faker->address,
            ]);
        }
    }
}
