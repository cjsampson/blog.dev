@extends('app')

@section('content')

	@foreach($posts as $post)
		<h2>{{{ $post->title }}}</h2>
		<p>{{{ $post->body }}}</p>
		<a href="{{{action('PostsController@edit', $post->id)}}}">Edit</a>
	@endforeach
	
	<div class="row" id="createButton">
		<a href="{{{action('PostsController@create')}}}">
			<button class="btn btn-success">Create a New Post</button>
		</a>
	</div>



@stop