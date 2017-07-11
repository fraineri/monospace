@extends('layouts/master')

@section('title')
	News Wall
@endsection
@section('head-scripts')
@endsection

@section('main')
	<div class="newsIndex-main">
		<div class="news-topBar">
			<div class="news-topBar-viewTitle">
				SECTIONS
			</div>
			<div id="myDropdown" class="news-topBar-searchList">
				<a href="/news/business">Business</a>
				<a href="/news/enterteinment">Enterteinment</a>
				<a href="/news/general">General</a>
				<a href="/news/sport">Sports</a>
				<a href="/news/technology">Technology</a>
			</div>
		</div>

		<div class="newsIndex-main-nav">
			<ul class="newsIndex-main-navList">
				@foreach($sections as $section)
					<li><a class="newsIndex-main-navList-item" href="/news/{{$section->section}}">{{$section->section}}</a></li>
				@endforeach
			</ul>
		</div>
	</div>
@endsection
@section('footer-scripts')
@endsection
