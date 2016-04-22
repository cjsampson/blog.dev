<?php

class PostsController extends \BaseController
{

	public function __construct()
	{	
		parent::__construct();
		$this->beforeFilter('auth', ['except' => ['index', 'show']]);
		$this->beforeFilter('edit', ['only' => ['edit']]);
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{	
		// $posts = Post::paginate(4);
		$query = Request::get('q');
		$posts = $query
					 ?  Post::where('title', 'LIKE', "%$query%")->
							  orWhere('body', 'LIKE', "%$query%")->paginate(4) 
					 : Post::with('user')->paginate(4);
	
		// ->withPosts ??
		return View::make('posts.index')->with('posts', $posts);
		// $posts = Post::getAllLike($q);
		// return View::make('posts.index')->with('posts', $posts);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
			// return [
			// 	'path' 		=> $file->getRealPath(),
			// 	'size' 		=> $file->getSize(),
			// 	'mime' 		=> $file->getMimeType(),
			// 	'name' 		=> $file->getClientOriginalName(),
			// 	'extension' => $file->getClientOriginalExtension(),
			// ];
		$post = new Post();   
		return $this->validateAndSave($post);
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::find($id);
		if(is_null($post)) {
			Log::error('Invalid parameter');
			App::abort(404);
		}
		
		return View::make('posts.show')->with(['post' => $post]);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);
		return View::make('posts.edit')->with(['post' => $post]);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::find($id);
		return $this->validateAndSave($post);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::find($id);
		if (!$post) {
			Session::flash('errorMessage', 'Post was not found');
			return Redirect::action('PostsController@index');
		}

		$post->delete();
		Session::flash('successMessage', 'The post was successfully deleted');
		return Redirect::action('PostsController@index');
	}

	protected function validateAndSave($post) 
	{
		$validator = Validator::make(Input::all(), Post::$rules);
	    if ($validator->fails()) {
	    	Log::error('Validation failed');
	    	Session::flash('errorMessage', 'Unable to save post');
	        return Redirect::back()->withInput()->withErrors($validator);
	    } 
		if( Input::hasFile('image')) 
		{
			$file = Input::file('image');
			$name = $file->getClientOriginalName();
			$file->move(public_path() . '/img/blogimgs' , $name);
	    
	    	// Lives columns saved lives on the Post Model
		    $post->publish('/img/blogimgs/'.$name,
		    				Input::get('title'), 
		    				Input::get('body'), 
		    				Auth::id() 
		    );
		$post->save();
		}
		Log::info('Successful post');

		Session::flash('successMessage', 'Post was successfully saved');

		return Redirect::action('PostsController@show', $post->id);
	}

	protected function postNotFound($id) 
	{
		$post = Post::find($id);
		if(is_null($post)) {
			Log::error('Invalid parameter');
			App::abort(404);
		}
		return $post;	
	}
}
