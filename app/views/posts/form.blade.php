

<!-- Title Form Input -->
<div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}"
	{{ Form::label('title', 'Title:') }}
	{{ Form::text('title', null, ['class' => 'form-control']) }}
	<small class="text-danger">{{ $errors->first('title') }}</small>
</div>

<!-- Image File Form Input -->
<div class="form-group{{ $errors->has('image') ? ' has-error' : '' }}"
	{{ Form::label('image', 'Image File:') }}
	{{ Form::file('image', null, ['class' => 'form-control']) }}
	<small class="text-danger">{{ $errors->first('image') }}</small>
</div>
<!-- Body Form Input -->
<div class="form-group{{ $errors->has('body') ? ' has-error' : '' }}"
	{{ Form::label('body', 'Body:') }}
	{{ Form::textarea('body', null, ['class' => 'form-control']) }}
	<small class="text-danger">{{ $errors->first('body') }}</small>
</div>

 {{ Form::submit('Push the Post!', ['class' => 'btn btn-primary pushButton']) }}