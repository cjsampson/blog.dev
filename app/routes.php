<?php


Route::get('profile', array('before' => 'auth.basic', function()
{
    // Only authenticated users may enter...
	Route::resource('/posts', 'PostsController');
}));

Route::get('/', 'HomeController@home');
Route::get('login', 'SessionsController@create');
Route::get('logot', 'SessionsController@destroy');
Route::get('/resume', 'MainController@resume');
Route::get('/portfolio', 'MainController@portfolio');
Route::get('/blog', 'MainController@blog');
Route::get('/contact', 'MainController@contact');

