<?php

Route::get('/', 'ExamplesController@index');
Route::get('/projects/{name}', 'ExamplesController@projects');
Route::get('/contact', 'ExamplesController@contact');
Route::get('/about', 'ExamplesController@about');
