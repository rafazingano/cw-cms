@extends('admin.porto.layout-sign')
@section('content')
<form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}
    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} mb-lg">
        <label>Email</label>
        <div class="input-group input-group-icon">
            <input name="email" value="{{ old('email') }}" required autofocus class="form-control input-lg" />
            <span class="input-group-addon">
                <span class="icon icon-lg">
                    <i class="fa fa-user"></i>
                </span>
            </span>
        </div>
        @if ($errors->has('email'))
        <span class="help-block">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
        @endif
    </div>

    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} mb-lg">
        <div class="clearfix">
            <label class="pull-left">Password</label>
            <!--a href="{{ route('password.request') }}" class="pull-right">Lost Password?</a-->
        </div>
        <div class="input-group input-group-icon">
            <input name="password" required type="password" class="form-control input-lg" />
            <span class="input-group-addon">
                <span class="icon icon-lg">
                    <i class="fa fa-lock"></i>
                </span>
            </span>            
        </div>
        @if ($errors->has('password'))
        <span class="help-block">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
        @endif
    </div>

    <div class="row">
        <div class="col-sm-8">
            <div class="checkbox-custom checkbox-default">
                 <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                <label for="RememberMe">Remember Me</label>
            </div>
        </div>
        <div class="col-sm-4 text-right">
            <button type="submit" class="btn btn-primary hidden-xs">Sign In</button>
            <button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Sign In</button>
        </div>
    </div>

    <!--span class="mt-lg mb-lg line-thru text-center text-uppercase">
        <span>or</span>
    </span-->

    <!--div class="mb-xs text-center">
        <a class="btn btn-facebook mb-md ml-xs mr-xs">Connect with <i class="fa fa-facebook"></i></a>
        <a class="btn btn-twitter mb-md ml-xs mr-xs">Connect with <i class="fa fa-twitter"></i></a>
    </div-->

    <!--p class="text-center">Don't have an account yet? <a href="{{ route('register') }}">Sign Up!</a></p-->

</form>

@endsection