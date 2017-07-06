<div class="sideBar">
	<i id="logo" class="fa fa-rocket" aria-hidden="true"></i>
	<h2 class="sideBar-title">
		@if(Auth::check())
			<span>{{ Auth::user()->username }}</span>
		@else
			MONO<span class="sideBar-title-space">SPACE<span>
		@endif
	</h2>
	
	<nav class="sideBar-nav">
		<ul class="sideBar-navList">
			<li class="sideBar-navList-item">News</li>
			<li class="sideBar-navList-item">Favorites</li>
			<li class="sideBar-navList-item">Account</li>
		</ul>
	</nav>
</div>