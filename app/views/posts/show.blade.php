@extends('app')

@section('content')

	<p>{{{$post->title}}}</p>
	<p>{{{$post->body}}}</p>
	@if (!empty($post->image)) 
		<img src="{{{$post->image}}}" alt="blog alt" class="blogImage">
	@endif
	<a href="{{{action('PostsController@edit', $post->id)}}}">
		<button class="btn btn-success pull-right createButton">Edit this Post</button>
	</a>

	<div class="backButton">
		<a href="{{{action('PostsController@index')}}}"><button class="btn">Go Back</button></a>
	</div>

@stop