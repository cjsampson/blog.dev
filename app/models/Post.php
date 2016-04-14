<?php

class Post extends Eloquent
{
	 public static $rules = [
	 	'title' => 'required|max:100',
	 	'body'	=> 'required|max:10000'
	 ];
	 
	 protected $table = 'posts';

}