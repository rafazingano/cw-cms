@extends('admin.porto.layout-sign')
@section('content')
@if (isset($message))
<span class="help-block">
    <strong>{{ $message }}</strong>
</span>
@endif
<form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
    {{ csrf_field() }}
    <div class="form-group mb-lg">
        <label>Name</label>
        <input name="name" type="text" class="form-control input-lg" />
    </div>

    <div class="form-group mb-lg">
        <label>E-mail Address</label>
        <input name="email" type="email" class="form-control input-lg" />
    </div>

    <div class="form-group mb-none">
        <div class="row">
            <div class="col-sm-6 mb-lg">
                <label>Password</label>
                <input name="password" type="password" class="form-control input-lg" />
            </div>
            <div class="col-sm-6 mb-lg">
                <label>Password Confirmation</label>
                <input name="password_confirm" type="password" class="form-control input-lg" />
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-8">
            <div class="checkbox-custom checkbox-default">
                <input id="AgreeTerms" name="agreeterms" type="checkbox"/>
                <label for="AgreeTerms">I agree with <a href="#">terms of use</a></label>
            </div>
        </div>
        <div class="col-sm-4 text-right">
            <button type="submit" class="btn btn-primary hidden-xs">Sign Up</button>
            <button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Sign Up</button>
        </div>
    </div>

    <span class="mt-lg mb-lg line-thru text-center text-uppercase">
        <span>or</span>
    </span>

    <div class="mb-xs text-center">
        <a class="btn btn-facebook mb-md ml-xs mr-xs">Connect with <i class="fa fa-facebook"></i></a>
        <a class="btn btn-twitter mb-md ml-xs mr-xs">Connect with <i class="fa fa-twitter"></i></a>
    </div>

    <p class="text-center">Already have an account? <a href="{{ route('login') }}">Sign In!</a></p>

</form>

@endsection