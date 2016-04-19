@extends('app')

@section('content')

	
	<div class="col-md-10 col-offset-2">
	<h3 id="contactHeading">Get in Touch</h3>
		
		{{ Form::open(['action' => 'post', 'action' => 'MainController@sendContact']) }}
			<!-- Enter Your Name Form Input -->
			<div class="form-group">
				{{ Form::label('name', 'Enter Your Name:') }}
				{{ Form::text('name', null, ['class' => 'form-control']) }}
			</div>
			<!-- Enter your Email Form Input -->
			<div class="form-group">
				{{ Form::label('email', 'Enter your Email:') }}
				{{ Form::text('email', null, ['class' => 'form-control']) }}
			</div>
			<!-- Subject for Contact Form Input -->
			<div class="form-group{{ $errors->has('subject') ? ' has-error' : '' }}">
			    {{ Form::label('subject', 'Subject of Contact') }}
			    {{ Form::select('subject',[
			    	'Codeup Questions', 'Hire Me', 'Just Saying Hey', 'Other'], 
	    			null, ['id' => 'subject', 'class' => 'form-control', 'required' => 'required']) }}
			    <small class="text-danger">{{ $errors->first('subject') }}</small>
			</div>
			<!-- What's on Your Mind? Form Input -->
			<div class="form-group">
				{{ Form::label('about', 'What\'s on Your Mind?:') }}
				{{ Form::textarea('about', null, ['class' => 'form-control']) }}
			</div>

			<div class="form-group" id="newsLetter">
			    <div class="checkbox{{ $errors->has('newsletter') ? ' has-error' : '' }}">
			        <label for="newsletter">
			            {{ Form::checkbox('newsletter', '1', null, ['id' => 'newsletter']) }} <span>Sampson's Bi-Weekly NewsLetter?</span>
			        </label>
			    </div>
			    <small class="text-danger">{{ $errors->first('newsletter') }}</small>
			</div>
			<div class="btn btn-group">
				{{ Form::submit('Send Your Info', ['class' => 'btn btn-primary', 'id' => 'contactButton']) }}
			</div>
		{{ Form::close() }}

	</div> <!-- .col-md-8 -->
	


@stop