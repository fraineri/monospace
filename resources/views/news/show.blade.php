@extends('layouts/master')

@section('title')
	{{ ucfirst($section) }} News
@endsection
@section('head-scripts')
	<script type="text/javascript">
		var sources = {!! json_encode($newsSource) !!};
		var news = {!! json_encode($news) !!};
	</script>
@endsection
@section('main')
	<div class="newsShow-main">
		<div class="news-topBar">
			<button onclick="myFunction()" class="news-topBar-viewTitle news-topBar-searchBtn">
				{{$section}}
			</button>
			<div id="myDropdown" class="news-topBar-searchList">
				@foreach($sections as $section)
				<a href="/news/{{$section->section}}">{{ucfirst($section->section)}}</a>
				@endforeach
			</div>
		</div>
	
<!--
		<div class="newsShow-main-new">
			<div class="newsShow-main-newCont">
				<div class="newsShow-main-newImg"
				style="background-image: url('https://static.independent.co.uk/s3fs-public/thumbnails/image/2017/06/09/10/brexit-guy-eu-negotiations.jpg');"></div>
				<h3 class="newsShow-main-newTitle">Theresa May's plans for EU citizens branded a 'damp squib' by the European Parliament</h3>
			</div>
			<div class="newsShow-main-newFooter">
				<span class="newsShow-main-newFooter-source">BBC</span>
				<div class="newsShow-main-newFooter-icons">
					<i class="newsShow-main-newFooter-favorite fa fa-heart-o"></i>
					<i class="newsShow-main-newFooter-comment fa fa-comment-o"></i>
				</div>
			</div>
		</div>	
-->	
	</div>
@endsection
@section('footer-scripts')
	<script type="text/javascript" src="/js/news/index.js"></script>
@endsection