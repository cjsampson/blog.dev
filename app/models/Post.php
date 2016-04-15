<?php

use Carbon\Carbon;

class Post extends Eloquent
{
	protected $table = 'posts';

	protected $fillable = ['title', 'body'];

	public static $rules = [
	 	'title' => 'required|max:100',
	 	'body'	=> 'required|max:10000'
	];
	
	public function getCreatedAtAttribute($value)
	{
	    $utc = Carbon::createFromFormat($this->getDateFormat(), $value);
	    return $utc->setTimezone('America/Chicago');
	}

	public function setUsernameAttribute($value)
	{
	    $this->attributes['username'] = strtolower($value);
	}

	public function user()
	{
	    return $this->hasMany('Post');
	}

}