@extends('layouts/master')

@section('title')
    Register
@endsection

@section('main')
    <div class="register-main">
        <div class="register-titleBar">
            <h1 class="register-searchBtn">REGISTER</h1>
        </div>
        <form class="register-form" action="{{ route('register') }}" method="POST">
            {{ csrf_field() }}
            <input class="register-form-input {{$errors->has('name') ? ' has-error ' : ''}}" type="text" name="name" value="{{ old('name') }}" placeholder="Name">
            @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif

            <input class="register-form-input {{$errors->has('surname') ? ' has-error ' : ''}}" type="text" name="surname" value="{{ old('surname') }}" placeholder="Surname">
            @if ($errors->has('surname'))
            <span class="help-block">
                <strong>{{ $errors->first('surname') }}</strong>
            </span>
            @endif

            <input class="register-form-input {{$errors->has('username') ? ' has-error ' : ''}}" type="text" name="username" value="{{ old('username') }}" placeholder="Username">
            @if ($errors->has('username'))
            <span class="help-block">
                <strong>{{ $errors->first('username') }}</strong>
            </span>
            @endif

            <input class="register-form-input {{$errors->has('email') ? ' has-error ' : ''}}" type="text" name="email" value="{{ old('email') }}" placeholder="email@example.com">
            @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif  

            <input class="register-form-input {{$errors->has('password') ? ' has-error ' : ''}}" type="password" name="password" placeholder="Password">
            @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif

            <input class="register-form-input {{$errors->has('password') ? ' has-error ' : ''}}" type="password" name="password_confirmation" placeholder=" Conmfirm Password">

            <button class="register-form-btn register-form-submit" type="submit" class="btn btn-primary">
                Register
            </button>
        </form>
    </div>
@endsection

