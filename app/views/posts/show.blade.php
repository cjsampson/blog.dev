@extends('app')

@section('content')

	<p>{{{$post->title}}}</p>
	<p>{{{$post->body}}}</p>

	<a href="{{{action('PostsController@edit', $post->id)}}}">
		<button class="btn btn-success pull-right createButton">Edit this Post</button>
	</a>

@stop