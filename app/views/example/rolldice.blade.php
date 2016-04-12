@extends('app')

@section('content')

	<h2>Roll Dice</h2>
	<p>	{{{ $rand }}} </p>

	<h2>Guess</h2>
	<p> {{{ $guess }}} </p>

	@if($rand == $guess)
		<p style="color:salmon;">NICE GUESS!</p>
	@endif
	
@stop