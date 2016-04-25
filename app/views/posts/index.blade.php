@extends('app')

@section('content')

	<!-- <h2 id="codingJourney">My Coding Journey</h2> -->
		
	<div class="col-md-11">

		<div class="row">
			@foreach($posts as $post)

				<section class="singlePost col-md-10 col-md-offset-1">
						<h2>{{{ $post->title }}}</h3>
							<div class="col-md-5">
								<p>{{{ $post->body }}}</p>
							</div>
							<div class="col-md-6">
								<img src="{{{$post->image}}}" alt="someimagealternate" class="img-responsive">
							</div>
						<p>Created: {{{$post->created_at->format('l, F jW Y @ h:i:s A')}}}</p>
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