@extends('app')

@section('content')


	@foreach($workflows as $workflow)
		<section class="singleWorkflow">
			<h3>{{ $workflow->title}}</h3>
			<p>
				{{ $workflow->body}}
			</p>
			<img src="{{$workflow->image}}" alt="{{$workflow->title}}">
		</section>

	@endforeach

@stop