<?php

use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder
{
	public function run()
	{
		$faker = Faker::create('en_US');
		foreach(range(1, 20) as $index)
		{
			Post::create([
				'title'   => $faker->sentence(5),
				'body'	  => $faker->paragraph(4),
				'user_id' => User::all()->first()->id,
				'image'   => public_path() . /img/blog_imgs/
			]);
		}
	}
}