<!DOCTYPE html>
<html lang="en">
<head>
	<title>Blog</title>
 	@include('partials.head')
</head>
<body>

<?php Session::put('key', 'value'); ?>


	<nav class="col-md-3 verticalNav">

		<h3 class="navHeader"><a href="{{{action('MainController@index')}}}">CJ Sampson</a></h3>

			<div class="navItems">
			@include('partials.header')	
		</div> <!-- .navItems -->

		<div class="footerIcons">
			@include('partials.footer')
		</div> <!-- .footerIcons -->
	</nav> <!-- .col-md-3.verticalNav -->
		

	<div class="col-md-9 col-md-offset-3">

		@if (Session::has('successMessage'))
		    <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
		@endif
		@if (Session::has('errorMessage'))
		    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
		@endif
		
	<div class="row">
		<div class="col-md-4 col-md-offset-8">
			<div class="searchBar">
				{{ Form::open(['method' => 'get', 'action' => 'PostsController@index']) }}
					<div class="form-group">
						{{ Form::input('search', 'q', null, ['class' => 'form-control', 'placeholder' => 'Search something in particular...']) }}
					</div> <!-- .form-group -->
				{{ Form::close() }}
			</div> <!-- .searchBar -->
		</div> <!-- .col-md-4 col-md-offset-8 -->
	</div> <!-- .row -->

		<div class="row">
			
				@yield('content')
			
		</div> <!-- .row -->

	</div> <!-- .col-md-9 -->
</div> <!-- .row -->

@include('partials.sideSlide')
</div> <!-- .container -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="/js/main.js">
</script>			
</body>
</html>