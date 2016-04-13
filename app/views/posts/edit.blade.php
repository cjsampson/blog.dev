@extends('app')

@section('content')

	<p>{{{$post->title}}}</p>
	<p>{{{$post->body}}}</p>

	{!! Form::open(['method' => 'POST', 'action' => 'PostsController@edit', 'class' => 'form-group']) !!}
	
	    boottext
	
	    <div class="btn-group pull-right">
	        {!! Form::reset("Reset", ['class' => 'btn btn-warning']) !!}
	        {!! Form::submit("Add", ['class' => 'btn btn-success']) !!}
	    </div>
	
	{!! Form::close() !!}
	
@stop