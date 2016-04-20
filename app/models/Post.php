<?php

use Carbon\Carbon;

class Post extends Eloquent
{
	protected $table = 'posts';

	protected $fillable = ['title', 'body', 'image'];

	public static $rules = [
	 	'title' => 'required|max:100',
	 	'body'	=> 'required|max:10000',
	 	// 'image' => 'max:50000|mimes:jpeg,png,jpg,gif'
	];
	// public static function getAllLike($q) 
	// {
	// 	return self::where('title', 'LIKE', '%$q%')->
	// 			   orWhere('body', 'LIKE', '%$q%')->
	// 			   orderBy('created_at', 'DESC')->paginate(4);
	// }

	public function publish($image, $title, $body, $user_id) 
	{
		$this->image = $image;
		$this->title = $title;
		$this->body = $body;
		$this->user_id = $user_id;
	}

	
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
	    return $this->belongsTo('User');
	}

	public function isAuthor(User $user) 
	{
		return $this->user_id == $user->id;
	}

}