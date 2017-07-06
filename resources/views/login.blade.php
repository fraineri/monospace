@extends('layouts/master')

@section('title')
	LOGIN
@endsection

@section('main')
	<div class="register-main">
		<div class="register-titleBar">
			<h1 class="register-searchBtn">LOGIN</h1>
		</div>
		<form class="register-form" action="{{ route('login') }}" method="POST">
            {{ csrf_field() }}
			<input class="register-form-input {{$errors->has('username') ? ' has-error ' : ''}}" type="text" name="username" value="{{ old('username') }}" placeholder="Username">
			@if ($errors->has('username'))
	        <span class="help-block">
	            <strong>{{ $errors->first('username') }}</strong>
            </span>
			@endif

			<input class="register-form-input {{$errors->has('password') ? ' has-error ' : ''}}" type="password" name="password" placeholder="Password">
            @if ($errors->has('password'))
	        <span class="help-block">
	            <strong>{{ $errors->first('password') }}</strong>
            </span>
			@endif

			<button class="register-form-submit" type="submit" class="btn btn-primary">
	            Register
			</button>
			<label class="register-remember">
	            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
	        </label>

			<a class="register-form-link" href="{{ route('password.request') }}">
	            Forgot Your Password?
            </a>
		</form>
	</div>
@endsection

