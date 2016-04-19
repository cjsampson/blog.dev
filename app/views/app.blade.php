<!DOCTYPE html>
<html lang="en">
<head>
	<title>Blog</title>
	@include('partials.head')
</head>
<body>

<?php Session::put('key', 'value'); ?>

@include('partials.header')	
	

	@if (Session::has('successMessage'))
	    <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
	@endif
	@if (Session::has('errorMessage'))
	    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
	@endif

	<div class="container site-content">
		@yield('content')
	</div>

@include('partials.footer')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script>
setTimeout(function() {
	$('.alert').slideUp(900);
}, 500);
</script>			
</body>
</html>