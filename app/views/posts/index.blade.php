@extends('app')

@section('content')

		<h2 id="codingJourney">My Coding Journey</h2>
		
		<div class="col-md-11" style="border: 1px solid black">
			<div class="row">
				@foreach($posts as $post)
					<section class="singlePost col-md-5" style="border:1px solid blue">
							<h4>{{{ $post->title }}}</h4>
							<p>{{{ $post->body }}}</p>
							<img src="{{{$post->image}}}" alt="someimagealternate">
							<p>This post was created at {{{$post->created_at->format('l, F jW Y @ h:i:s A')}}}</p>
							<p>This post was updated at {{{$post->updated_at->format('l, F jW Y @ h:i:s A')}}}</p>
							<a href="{{{action('PostsController@show', $post->id)}}}">Edit</a>
					</section> <!-- .singlePost -->
				@endforeach
		</div> <!-- .col-md-7 -->
	</div>
		
		<div class="row" id="createButton">
			<div class="col-md-12">
				<a href="{{{action('PostsController@create')}}}">
					<button class="btn btn-success createButton pull-right">Create a New Post</button>
				</a>
			</div>
		</div> <!-- .row -->


	{{ $posts->links() }}

@stop