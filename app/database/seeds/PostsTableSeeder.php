<?php

use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder
{
	public function run()
	{
		$post = new Post;
		$post->title = 'Codeup experience';
		$post->body = '';
		$post->user_id = 1;
		$post->save();

		$post = new Post;
		$post->title = 'JavaScript syntax vs PHP';
		$post->body = '';
		$post->user_id = 1;
		$post->save();

		$post = new Post;
		$post->title = 'Laravel is awesome!';
		$post->body = '';
		$post->user_id = 1;
		$post->save();

		$faker = Faker::create('en_US');
		foreach(range(3, 15) as $index)
		{
			Post::create([
				'title'   => $faker->sentence,
				'body'    => $faker->text,
				'image'	  => '/img/blogimgs/light-purple-1.png',
				'user_id' => 1
			]);
		}
	}
}