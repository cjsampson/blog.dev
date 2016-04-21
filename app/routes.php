<?php





Route::get('posts', function()
{
	$query = Input::get('q');
	return $query;
	// return View::make('posts.index')->withPosts(Post::all());
});

Route::resource('/posts', 'PostsController');
Route::get('/login', 'AuthController@loginView');
Route::post('/login', 'AuthController@loginAttempt');
Route::get('/logout', 'AuthController@doLogout');
Route::get('/', 'MainController@index');
Route::resource('/workflow', 'WorkflowController');
Route::get('/about', 'MainController@about');
Route::get('/resume', 'MainController@resume');
Route::get('/portfolio', 'MainController@portfolio');
Route::get('/blog', 'MainController@blog');
Route::get('/contact', 'MainController@sendContact');
Route::get('/contact', 'MainController@contact');

Route::get('/query-test', function() {
	$posts = Post::where('title', '=', 'Eaque sed qui molestiae rem.')->get();
});