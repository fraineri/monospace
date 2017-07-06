<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="/css/font-awesome/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Droid+Sans+Mono" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
	<title>@yield('title')</title>
	@yield('head-scripts')
</head>
<body>
<div class="main">
	@include('layouts/sideNav')
	@yield('main')
</div>
</body>
</html>
@yield('footer-scripts')