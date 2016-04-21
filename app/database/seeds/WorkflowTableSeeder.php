<?php

class WorkflowTableSeeder extends Seeder
{
	public function run() 
	{
		$workflow = new Workflow;
		$workflow->title = 'My love for Fira Code font-face';
		$workflow->body = "I find myself often changing the look of my editor quite often!  This may be due to a number of reasons ranging from lighting in the room, the mood that I am in, or maybe I just can't see that well.  However, ever since I have been introduced to the Fira Code font kit, I have been in absolute awe for this font.  I don't find myself now trying to change the color of my editor or finding which font is easiest to read!  It's really easy to install.  All you have to do is go to github and clone the tonsky/FiraCode repo.";
		$workflow->image = '/img/blogimgs/firacode.svg';
		$workflow->save();
	}
}