<?php

class AuthController extends \BaseController {

	public function loginView() 
	{
		return View::make('auth.login');
	}

	public function loginAttempt()
	{
		if (Auth::attempt([
			'email' => Input::get('email'), 
			'password' => Input::get('password')
			])) {
			return Redirect::intended('/posts');
		} else {
			Session::flash('errorMessage', 'Your input fields were wrong');
			return Redirect::back()->withInput();
		}
	}

	public function doLogout() 
	{
		Auth::logout();
		return Redirect::action('PostsController@index');
	}
}