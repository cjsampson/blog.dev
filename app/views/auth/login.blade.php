@extends('app')
@section('content')

<div class="container form-container">
    <div class="col-md-6">

        {{ Form::open(['method' => 'POST', 'action' => 'AuthController@loginAttempt', 'class' => 'form-horizontal']) }}

        <!-- Email Login Form Input -->
        <div class="form-group">
            {{ Form::label('email', 'Email Login:') }}
            {{ Form::text('email', null, ['class' => 'form-control']) }}
        </div>
        <!-- Password Form Input -->
        <div class="form-group">
            {{ Form::label('password', 'Password:') }}
            {{ Form::password('password', ['class' => 'form-control']) }}
        </div>

        <div class="btn-group">
            {{ Form::submit("Login", ['class' => 'btn btn-primary']) }}
        </div>

    {{ Form::close() }}
    </div> <!-- .col-md-6 -->
</div> <!-- .container -->


@stop