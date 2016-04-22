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

	@if(Auth::check())
		<div class="row" id="createButton">
			<div class="col-md-8">
				<a href="{{{action('WorkflowController@create')}}}">
					<button class="btn btn-success createButton pull-right">Share Something</button>
				</a>
			</div>
		</div> <!-- .row -->
	@endif

@stop