<?php

use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder
{
	public function run()
	{
		$faker = Faker::create();
		foreach(range(1, 10) as $index)
		{
			PostsTableSeeder::create([
				'title'  => $faker->sentence(),
				'body'	 => $faker->realText($maxNbChars = 200, $indexSize = 2),
			]);
		}
	}
}