<?php



Route::get('/resume', 'MainController@resume');
Route::get('/portfolio', 'MainController@portfolio');
Route::get('/blog', 'MainControlle@blog');
Route::get('/contact', 'MainController@contact');

Route::resource('/posts', 'PostsController');
