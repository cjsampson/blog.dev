<!DOCTYPE html>
<html lang="en">
<head>
	<title>Blog</title>
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,700' rel='stylesheet' type='text/css'>
 	@include('partials.head')
</head>
<body>
	<div class="navigationSidebar">
		@include('partials.header')
		@include('partials.footer')
	</div> <!-- navigationSiderbar -->
	
	<div class="flexContainer">

		<div class="contentContainer">

			<?php Session::put('key', 'value'); ?>


			{{ Form::open(['method' => 'get', 'action' => 'PostsController@index', 'class' => 'formSearch']) }}
					{{ Form::input('search', 'q', null, ['placeholder' => 'Search something in particular']) }}
			{{ Form::close() }} <!-- .formSearch -->

			@yield('content')
			
		</div> <!-- .contentContainer -->
	</div> <!-- .flexContainer -->

		@include('partials.sideSlide')
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<script src="/js/main.js"></script>
	</div> <!-- .siteContainer -->
</body>
</html>
