<?php

use Carbon\Carbon;

class Workflow extends Eloquent
{
	protected $table = 'workflow';
	protected $fillable = ['title', 'body', 'image'];
	protected $rules = [
		'title'  => 'required|max:200',
		'body' 	 => 'required|max:20000',
		'image'	 => 'image|max:40000|mimes:jpg,jpeg,png,svg,gif'
	];

	
}