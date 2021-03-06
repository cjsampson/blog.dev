<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{

		Eloquent::unguard(); // Remove Constraints
		DB::statement('SET FOREIGN_KEY_CHECKS=0;');
		DB::table('posts')->truncate();
		DB::table('users')->truncate();
		DB::table('workflow')->truncate();
		$this->call('UsersTableSeeder');
		$this->call('PostsTableSeeder');
		$this->call('WorkflowTableSeeder');
		// DB::statement('SET FOREIGN_KEY_CHECKS=1;');
	}

}
