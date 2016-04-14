<?php

class MainController extends \BaseController {

	public function resume() 
	{
		return View::make('sections.about');
	}

	public function portfolio() 
	{
		return View::make('sections.portfolio');
	}

	public function blog() 
	{
		return View::make('posts.index');
	}

	public function contact() 
	{
		return View::make('sections.contact');
	}


}
