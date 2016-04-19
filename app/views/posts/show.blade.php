@extends('app')

@section('content')

	<p>{{{$post->title}}}</p>
	<p>{{{$post->body}}}</p>
	@if (!empty($post->image)) 
		<img src="{{{$post->image}}}" alt="This is an alt">
	@endif
	<a href="{{{action('PostsController@edit', $post->id)}}}">
		<button class="btn btn-success pull-right createButton">Edit this Post</button>
	</a>

@stop