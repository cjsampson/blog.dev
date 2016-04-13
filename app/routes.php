<?php

Route::get('/posts', 'PostsController@index');

Route::resource('/posts', 'PostsController');
