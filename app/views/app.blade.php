<!DOCTYPE html>
<html lang="en">
<head>
	<title>Blog</title>
	@include('partials.head')
</head>
<body>

<?php Session::put('key', 'value'); ?>
<div class="row">

	<nav class="col-md-3 verticalNav">
		
		<div class="navItems">
			@include('partials.header')	
		</div> <!-- .navItems -->

		<div class="footerIcons">
			@include('partials.footer')
		</div> <!-- .footerIcons -->

	</nav> <!-- .col-md-3.verticalNav -->

	@if (Session::has('successMessage'))
	    <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
	@endif
	@if (Session::has('errorMessage'))
	    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
	@endif

	<div class="col-md-8">
			<div class="searchBar">
			{{ Form::open(['method' => 'get', 'action' => 'PostsController@index']) }}
				<div class="form-group">
					{{ Form::input('search', 'q', null, ['class' => 'form-control', 'placeholder' => 'Search my blog']) }}
				</div> <!-- .form-group -->
			{{ Form::close() }}
		</div> <!-- .searchBar -->
		<div class="container site-content">
			@yield('content')
		</div>
	</div>


@include('partials.sideSlide')
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script src="/js/main.js">
</script>			
</body>
</html>