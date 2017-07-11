@extends('layouts/master')

@section('title')
    Register
@endsection

@section('main')
    <div class="register-main">
        <div class="register-titleBar">
            <h1 class="register-searchBtn">account settings</h1>
        </div>
        <form class="register-form" action="/user/update" method="POST">
            {{ csrf_field() }}
            <input class="register-form-input {{$errors->has('name') ? ' has-error ' : ''}}" type="text" name="name" value="{{ \Auth::user()->name }}" placeholder="Name">
            @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
            @endif

            <input class="register-form-input {{$errors->has('surname') ? ' has-error ' : ''}}" type="text" name="surname" value="{{ \Auth::user()->surname }}" placeholder="Surname">
            @if ($errors->has('surname'))
            <span class="help-block">
                <strong>{{ $errors->first('surname') }}</strong>
            </span>
            @endif

            <input class="register-form-input {{$errors->has('username') ? ' has-error ' : ''}}" type="text" name="username" value="{{ \Auth::user()->username }}" placeholder="Username">
            @if ($errors->has('username'))
            <span class="help-block">
                <strong>{{ $errors->first('username') }}</strong>
            </span>
            @endif

            <input class="register-form-input {{$errors->has('email') ? ' has-error ' : ''}}" type="text" name="email" value="{{ \Auth::user()->email }}" placeholder="email@example.com">
            @if ($errors->has('email'))
            <span class="help-block">
                <strong>{{ $errors->first('email') }}</strong>
            </span>
            @endif  

            <button class="register-form-btn">Change Password</button>
            <input type="hidden" id="changePassword" name="changePassword" value="false">

            <input class="register-form-input {{$errors->has('password') ? ' has-error ' : ''}}" type="password" name="password" placeholder="Password">
            @if ($errors->has('password'))
            <span class="help-block">
                <strong>{{ $errors->first('password') }}</strong>
            </span>
            @endif
            <input class="register-form-input {{$errors->has('newPassword') ? ' has-error ' : ''}}" type="password" name="newPassword" placeholder="New Password">
            @if ($errors->has('newPassword'))
            <span class="help-block">
                <strong>{{ $errors->first('newPassword') }}</strong>
            </span>
            @endif

            <input class="register-form-input {{$errors->has('newPassword') ? ' has-error ' : ''}}" type="password" name="newPassword_confirmation" placeholder=" Conmfirm Password">


            <button class="register-form-btn register-form-submit" type="submit" class="btn btn-primary">
                Update Info
            </button>
        </form>
    </div>
@endsection
@section('footer-scripts')
    <script type="text/javascript" src="/js/users/index.js"></script>
@endsection

