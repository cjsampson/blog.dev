@extends('app')

@section('content')

	<h2>Create a New Post</h2>

	<form action="{{{action('PostsController@store')}}}" method="post">
		<div class="form-group">
			<label for="title">Title: </label>
			<input type="text" name="title" id="title" value="{{{Input::old('title')}}}">
		</div>

		<div class="form-group">
			<label for="body">Body: </label>
			<textarea name="body" id="body" cols="30" rows="10"></textarea>
		</div>
		
			<button type="submit">Create New Post</button>
	</form>

@stop