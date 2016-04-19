@extends('app')

@section('content')

	<h2>Create a New Post</h2>

	{{ Form::open(['method' => 'POST', 'action' => 'PostsController@store', 'files' => 'true']) }}

		@include('posts.form')
	
	{{ Form::close() }}
	
@stop