<?php





Route::get('posts', function()
{
	$query = Input::get('q');
	return $query;
	// return View::make('posts.index')->withPosts(Post::all());
});

// Main Navigation routes
Route::get('/', 'MainController@index');
Route::get('/about', 'MainController@about');
Route::get('/resume', 'MainController@resume');
Route::get('/portfolio', 'MainController@projects');
Route::get('/blog', 'MainController@blog');
Route::get('/contact', 'MainController@contact');
Route::post('/contact', 'MainController@sendContact');

// Login routes
Route::get('/login', 'AuthController@loginView');
Route::post('/login', 'AuthController@loginAttempt');
Route::get('/logout', 'AuthController@doLogout');

// Resource Controller routes
Route::resource('/workflow', 'WorkflowController');
Route::resource('/posts', 'PostsController');


