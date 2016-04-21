<header>
	<nav class="blogNav">
		<div class="searchBar">
			{{ Form::open(['method' => 'get', 'action' => 'PostsController@index']) }}
				<div class="form-group">
					{{ Form::input('search', 'q', null, ['class' => 'form-control', 'placeholder' => 'Search my blog']) }}
				</div>
			{{ Form::close() }}
		</div>	
		
		<li><a href="{{{action('MainController@about')}}}" class="__blogNav--item">About</a></li>
		<li><a href="{{{action('MainController@resume')}}}" class="__blogNav--item">Resume</a></li>
		<li><a href="{{{action('MainController@portfolio')}}}" class="__blogNav--item">Portfolio</a></li>
		<li><a href="{{{action('PostsController@index')}}}" class="__blogNav--item">Blog</a></li>
		<li><a href="{{{action('MainController@contact')}}}" class="__blogNav--item">Contact</a></li>
	</nav> <!-- nav.blogNav -->

</header>