@extends('admin.porto.layout-sign-locked')
@section('content')
<form action="#">
    <div class="current-user text-center">
        <img src="{{ asset('assets/admin/porto/images/logged-user.jpg') }}" alt="John Doe" class="img-circle user-image" />
        <h2 class="user-name text-dark m-none">John Doe</h2>
        <p class="user-email m-none">johndoe@okler.com</p>
    </div>
    <div class="form-group mb-lg">
        <div class="input-group input-group-icon">
            <input id="pwd" type="password" class="form-control input-lg" placeholder="Password" />
            <span class="input-group-addon">
                <span class="icon icon-lg">
                    <i class="fa fa-lock"></i>
                </span>
            </span>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-6">
            <p class="mt-xs mb-none">
                <a href="#">Not John Doe?</a>
            </p>
        </div>
        <div class="col-xs-6 text-right">
            <button type="submit" class="btn btn-primary">Unlock</button>
        </div>
    </div>
</form>
@endsection