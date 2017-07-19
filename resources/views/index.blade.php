<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="/css/font-awesome/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Droid+Sans+Mono" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
	<title>Monospace</title>
</head>
<body>
<div id="home" class="home-main">
	<div class="homeMain-cont">
		<h1 class="homeMain-cont-title">
			MONO<span class="homeMain-cont-title-space">SPACE<span>
		</h1>
		<div class="homeMain-cont-buttons">
			<a class="homeMain-cont-btn" href="#forms">Log In</a>
			<a class="homeMain-cont-btn" href="#forms">Sign Up</a>
		</div>
	</div>
</div>
<div id="about" class="home-about">
	<div class="homeAbout-cont">
		<div class="homeAbout-cont-slogan">
			<div class="homeAbout-cont-slogan-titles">
				<h3>ONE 	<strong>PAGE</strong></h3>
				<h3>ALL THE <strong>WORLD</strong></h3>
				<h3>IN YOUR <strong>SCREEN</strong></h3>
			</div>
		</div>
		<div class="homeAbout-cont-example">
			<div class="new-example-cont">
				<div class="newsShow-main-new new-example example-1">
					<div class="newsShow-main-newCont" >
						<div class="newsShow-main-newImg"></div>
						<h3 class="newsShow-main-newTitle">Grisly murders stun bucolic Pennsylvania community</h3>
					</div>
					<div class="newsShow-main-newFooter">
						<span class="newsShow-main-newFooter-source">CNN</span>
						<div class="newsShow-main-newFooter-icons">
							<i class="newsShow-main-newFooter-favorite fa fa-heart-o"></i>
							<i class="newsShow-main-newFooter-comment fa fa-comment-o"></i>
						</div>
					</div>
				</div>
			</div>
			<div class="new-example-cont-2">
				<div class="newsShow-main-new new-example example-2">
					<div class="newsShow-main-newCont" >
						<div class="newsShow-main-newImg"></div>
						<h3 class="newsShow-main-newTitle">Theresa May's plans for EU citizens branded a 'damp squib' by the European Parliament</h3>
					</div>
					<div class="newsShow-main-newFooter">
						<span class="newsShow-main-newFooter-source">Independent</span>
						<div class="newsShow-main-newFooter-icons">
							<i class="newsShow-main-newFooter-favorite fa fa-heart-o"></i>
							<i class="newsShow-main-newFooter-comment fa fa-comment-o"></i>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>
</div>
<div id="forms" class="home-forms">
	<div class="home-login">
		<div class="home-login-cont">
			<h3 class="home-login-title">Login</h3>
			<form class="home-login-form" action="{{ route('login') }}" method="POST">
				{{ csrf_field() }}
				<input class="register-form-input" type="text" name="username" placeholder="Username">
				@if ($errors->has('username'))
		            <span class="help-block">
		                <strong>{{ $errors->first('username') }}</strong>
		            </span>
	            @endif				
	            <input class="register-form-input" type="password" name="password" placeholder="Password">
				<input class="login-btn register-form-btn" type="submit" name="login" value="Enter">
			</form>
		</div>
	</div>
	<div class="home-register">
		<div class="home-register-cont">
			<h3 class="home-register-title">Sign up</h3>
			<form class="home-register-form" action="{{ route('register') }}" method="POST">
				{{ csrf_field() }}
				<input id="register-name" class="register-form-input" type="text" name="name" value="{{ old('name') }}" placeholder="Name">
				@if ($errors->has('name'))
		            <span class="help-block">
		                <strong>{{ $errors->first('name') }}</strong>
		            </span>
	            @endif
				<input id="register-surname" class="register-form-input" type="text" name="surname" value="{{ old('surname') }}" placeholder="Surname">
				@if ($errors->has('name'))
		            <span class="help-block">
		                <strong>{{ $errors->first('surname') }}</strong>
		            </span>
	            @endif

				<input id="register-username" class="register-form-input" type="text" name="username" value="{{ old('username') }}" placeholder="Username">
				@if ($errors->has('username'))
		            <span class="help-block">
		                <strong>{{ $errors->first('username') }}</strong>
		            </span>
	            @endif
	            <input id="register-email" class="register-form-input" type="text" name="email" value="{{ old('email') }}" placeholder="email@example.com">
				@if ($errors->has('email'))
		            <span class="help-block">
		                <strong>{{ $errors->first('email') }}</strong>
		            </span>
	            @endif
				
				<input id="register-password" class="register-form-input" type="password" name="password" placeholder="Password">
				@if ($errors->has('password'))
		            <span class="help-block">
		                <strong>{{ $errors->first('password') }}</strong>
		            </span>
	            @endif
				<input id="register-password-confirm" class="register-form-input" type="password" name="password_confirmation" placeholder="Confirm Password">
				
				<div class="register-form-btn-step-cont">
					<a id="previous-step" class="register-form-btn register-form-btn-step" href="#">Back</a>
					<a id="next-step" class="register-form-btn register-form-btn-step" href="#">Next</a>
					<input id="register-submit" class="login-btn register-form-btn" type="submit" name="submit" value="Submit">
				</div>

			</form>
		</div>		
	</div>		
</div>
</body>
</html>
<script type="text/javascript" src="/js/home.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
	$('.homeMain-cont-btn').click(function(){
	    $('html, body').animate({
	        scrollTop: $( $(this).attr('href') ).offset().top
	    }, 500);
	    return false;
	});
</script>