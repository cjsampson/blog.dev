@extends('app')

@section('content')

	@foreach($posts as $post)
		<h2>{{{ $post->title }}}</h2>
		<p>{{{ $post->body }}}</p>
		<a href="{{{action('PostsController@edit', $post->id)}}}">Edit</a>
	@endforeach

	


@stop