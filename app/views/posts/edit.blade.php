@extends('app')

@section('content')

	<!-- Edit Form -->
	{{ Form::model($post, ['action' => ['PostsController@update', $post->id], 'method' => 'PUT']) }}
		@include('posts.form')
	{{ Form::close() }}

	<!-- Delete Button -->
	{{ Form::open(['method' => 'POST', 'action' => 'PostsController@destroy']) }}
		{{ Form::hidden('_method', 'DELETE') }}
		{{ Form::submit('Delete this Post', ['class' => 'btn btn-danger editButtons']) }}
	{{ Form::close() }}

@stop