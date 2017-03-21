@extends('admin.porto.layout-sign')
@section('content')
<div class="alert alert-info">
    <p class="m-none text-weight-semibold h6">Enter your e-mail below and we will send you reset instructions!</p>
</div>

<form>
    <div class="form-group mb-none">
        <div class="input-group">
            <input name="username" type="email" placeholder="E-mail" class="form-control input-lg" />
            <span class="input-group-btn">
                <button class="btn btn-primary btn-lg" type="submit">Reset!</button>
            </span>
        </div>
    </div>

    <p class="text-center mt-lg">Remembered? <a href="pages-signin.html">Sign In!</a></p>
</form>
@endsection