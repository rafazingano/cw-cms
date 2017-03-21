@extends('admin.porto.layout')
@section('content')
<div clas="row">
    <div class="col-md-4 col-lg-3">
        @include('admin.porto.users.partials.panel')
    </div>
    <div class="col-md-8 col-lg-6">
        @include('admin.porto.users.partials.tabs')
    </div>
    <div class="col-md-12 col-lg-3">
        @include('admin.porto.users.partials.infos')
    </div>
</div>
@endsection