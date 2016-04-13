@extends('app')

@section('content')

	<h2>Create a New Post</h2>

	{{ Form::open(['method' => 'POST', 'action' => 'PostsController@store']) }}
	
		<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
		    {{ Form::label('title', 'Title:') }}
		    {{ Form::text('title', null, ['class' => 'form-control']) }}
		    <small class="text-danger">{{ $errors->first('title') }}</small>
		</div>

		<div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}">
		    {{ Form::label('body', 'Body:') }}
		    {{ Form::textarea('body', null, ['class' => 'form-control']) }}
		    <small class="text-danger">{{ $errors->first('body') }}</small>
		</div>
		
		{{ Form::submit('Button name', ['class' => 'btn btn-info pull-right']) }}
	
	{{ Form::close() }}
	
@stop