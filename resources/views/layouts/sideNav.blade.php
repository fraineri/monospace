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
			<li><a class="sideBar-navList-item" href="/news">News</a></li>
			<li class="sideBar-navList-item">Favorites</li>
			@if(Auth::check())
				<li><a class="sideBar-navList-item" href="/user/edit">Account</a></li>
				<li class="sideBar-navList-item"
					href="{{ route('logout') }}"
					onclick="event.preventDefault();document.getElementById('logout-form').submit();">
						Logout
				</li>
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	            	{{ csrf_field() }}
	            </form>
            @else
	            <li><a class="sideBar-navList-item" href="/login">Login</a></li>
	            <li><a class="sideBar-navList-item" href="/register">Register</a></li>
            @endif
		</ul>
	</nav>
</div>