<?php

class Post extends Eloquent
{
	 public static $rules = [
	 	'title' => 'require|max:100',
	 	'body'	=> 'require|max:10000'
	 ];
	 
	 protected $table = 'posts';

}