<?php

use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
	public function run()
	{
		$user = new User();
		$user->first_name = $_ENV['USER_FIRST'];
		$user->last_name = $_ENV['USER_LAST'];
		$user->email = $_ENV['USER_EMAIL'];
		$user->password = $_ENV['USER_PASS'];
		$user->save();


		$faker = Faker::create('en_US');
		foreach(range(2, 20) as $index)
		{
			User::create([
				'first_name' => $faker->firstName,
				'last_name'  => $faker->lastName,
				'email'		 => $faker->email,
				'password'   => $faker->password
			]);
		}
	}
}