<?php

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('/infinite', function()
{
	return View::make('infinite');
});

Route::get('/sayhello/{name?}', function($name = 'Codeup')
{
	return "Hello, $name!";
});

Route::get('/portfolio', function ()
{
	return View::make('myfirstview');
});

Route::get('/sayhello/{name?}/{age?}', function($name = 'Codeup')
{
	$data = ['name' => $name];
	return View::make('myfirstview');
});