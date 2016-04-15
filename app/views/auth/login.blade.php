

{{ Form::open(['method' => 'POST', 'action' => 'SessionsController@index', 'class' => 'form-horizontal']) }}

   	<!-- Email Login Form Input -->
   	<div class="form-group">
   		{{ Form::label('email', 'Email Login:') }}
   		{{ Form::text('email', null, ['class' => 'form-inline']) }}
   	</div>
   	<!-- Password Form Input -->
   	<div class="form-group">
   		{{ Form::label('password', 'Password:') }}
   		{{ Form::password('password', null, ['class' => 'form-inline']) }}
   	</div>

    <div class="btn-group pull-right">
        {{ Form::submit("Login", ['class' => 'btn btn-primary']) }}
    </div>

{{ Form::close() }}