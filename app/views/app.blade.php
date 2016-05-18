<!DOCTYPE html>
<html lang="en">
<head>
	<title>Blog</title>
 	@include('partials.head')
</head>
<body>
	<div class="flexContainer">
		<div class="navigationSidebar">
			@include('partials.header')
			@include('partials.footer')
		</div> <!-- navigationSiderbar -->

		<div class="contentContainer">

			<?php Session::put('key', 'value'); ?>

			<h3 class="navHeader"><a href="{{{action('MainController@index')}}}">CJ Sampson</a></h3>

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
