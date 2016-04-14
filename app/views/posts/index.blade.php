@extends('app')

@section('content')

	<h2 id="codingJourney">My Coding Journey</h2>

	@foreach($posts as $post)
		<section class="singlePost">
			<h4>{{{ $post->title }}}</h4>
			<p>{{{ $post->body }}}</p>
			<p>This post was created at {{{$post->created_at->format('l, F jW Y @ h:i:s A')}}}</p>
			<p>This post was updated at {{{$post->updated_at->format('l, F jW Y @ h:i:s A')}}}</p>
			<a href="{{{action('PostsController@show', $post->id)}}}">Edit</a>
		</section>
	@endforeach
	
	<div class="row" id="createButton">
		<a href="{{{action('PostsController@create')}}}">
			<button class="btn btn-success">Create a New Post</button>
		</a>
	</div>

	{{ $posts->links() }}

@stop