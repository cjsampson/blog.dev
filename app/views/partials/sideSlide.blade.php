<div class="slideMenu">
		<div class="authButtons">
		@if (Auth::check())
			<a href="{{{action('AuthController@doLogout')}}}"><button class="btn btn-danger pull-right">Signout</button></a>
		@else
			<a href="{{{action('AuthController@loginView')}}}"><button class="btn btn-primary pull-right" >Sign In</button></a>
		@endif
	</div> <!-- .authButtons -->
	<a href="#" class="slideToggle"></a>
</div>

