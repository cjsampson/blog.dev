<?php

class MainController extends \BaseController {

	public function index() 
	{
		return View::make('sections.home');
	}

	public function about() 
	{
		return View::make('sections.about');
	}

	public function resume() 
	{
		return View::make('sections.resume');
	}

	public function projects() 
	{
		return View::make('sections.projects');
	}

	public function blog() 
	{
		return View::make('posts.index');
	}

	public function contact() 
	{
		return View::make('sections.contact');
	}

	public function sendContact() 
	{
		// do something
	}


}
