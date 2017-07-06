@extends('layouts/master')

@section('title')
	{{ ucfirst($section) }} News
@endsection

@section('head-scripts')
	<script type="text/javascript">
		var sec = "{{ $section }}";
	</script>
@endsection

@section('main')
	<div class="newsIndex-main">
		<div class="newsIndex-main-searchBar">
			<button onclick="myFunction()" class="newsIndex-main-searchBtn">
				{{$section}}
			</button>
			<div id="myDropdown" class="newsIndex-main-searchList">
				<a href="/news/business">Business</a>
				<a href="/news/enterteinment">Enterteinment</a>
				<a href="/news/general">General</a>
				<a href="/news/sports">Sports</a>
				<a href="/news/technology">Technology</a>
			</div>
		</div>
		<!--
		<div class="newsIndex-main-new">
			<div class="newsIndex-main-newCont">
				<div class="newsIndex-main-newImg"></div>
				<h3 class="newsIndex-main-newTitle">"Sony’s latest Xperia is a terrific slow-mo shooter, with caveats"</h3>
				<p class="newsIndex-main-newDesc">"If you shoot a lot of slow-mo video, you'll love the Xperia XZ Premium."</p>
			</div>
			<div class="newsIndex-main-newFooter">
				<span class="newsIndex-main-newFooter-source">Hacker News</span>
				<span class="newsIndex-main-newFooter-date">2017-06-29</span>
			</div>
			<div class="newsIndex-main-newInfo">
				<i class="newsIndex-main-newInfo-favorite fa fa-heart-o"></i>
				<i class="newsIndex-main-newInfo-comment fa fa-comment-o"></i>
			</div>
		</div>
		-->
	</div>
@endsection

@section('footer-scripts')
	<script type="text/javascript" src="/js/news/index.js"></script>
@endsection