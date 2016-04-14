@extends('app')

@section('content')


	{{ Form::model($post, ['action' => ['PostsController@update', $post->id], 'method' => 'PUT']) }}
	
		<!-- Title Form Input -->
		<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}"
			{{ Form::label('title', 'Title:') }}
			{{ Form::text('title', null, ['class' => 'form-control']) }}
			<small class="text-danger">{{ $errors->first('title') }}</small>
		</div>
		<!-- Body Form Input -->
		<div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}"
			{{ Form::label('body', 'Body:') }}
			{{ Form::textarea('body', null, ['class' => 'form-control']) }}
			<small class="text-danger">{{ $errors->first('body') }}</small>
		</div>

		 {{ Form::submit('Edit the Post!', ['class' => 'btn btn-primary']) }}
	
	{{ Form::close() }}
	
	{{ Form::open(['method' => 'POST', 'action' => 'PostsController@destroy']) }}
		{{ Form::hidden('_method', 'DELETE') }}
		{{ Form::submit('Delete this Post', ['class' => 'btn btn-danger editButtons']) }}
	{{ Form::close() }}


	
@stop