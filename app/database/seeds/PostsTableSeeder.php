<?php

use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder
{
	public function run()
	{
		$faker = Faker::create('en_US');
		foreach(range(1, 15) as $index)
		{
			User::create([
				'title'   => $faker->sentence,
				'body'    => $faker->text
				'image'	  => '/img/light-purple-1.png',
			]);
		}
	}
}