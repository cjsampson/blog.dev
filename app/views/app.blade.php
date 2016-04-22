<!DOCTYPE html>
<html lang="en">
<head>
	<title>Blog</title>
	@include('partials.head')
</head>
<body>

<?php Session::put('key', 'value'); ?>

	<nav class="col-md-3 verticalNav">
		<h3 class="navHeader">CJ Sampson</h3>
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
		
		<div class="col-md-12">
			<div class="searchBar">
				{{ Form::open(['method' => 'get', 'action' => 'PostsController@index']) }}
					<div class="form-group">
						{{ Form::input('search', 'q', null, ['class' => 'form-control', 'placeholder' => 'Search my blog']) }}
					</div> <!-- .form-group -->
				{{ Form::close() }}
			</div> <!-- .searchBar -->
		</div>

		<div class="container main-content">
			@yield('content')
		</div> <!-- .container site-point -->

	</div> <!-- .col-md-9 -->

</div> <!-- .row -->

@include('partials.sideSlide')
</div> <!-- .container -->


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="/js/main.js">
</script>			
</body>
</html>