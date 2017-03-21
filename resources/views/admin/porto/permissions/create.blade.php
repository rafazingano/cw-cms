@extends('admin.porto.layout')
@section('content')
<div clas="row">
    <div class="col-md-12">        
        {!! Form::open(['route' => ['admin.permissions.store'], 'class' => 'form-horizontal']) !!}
        @include('admin.porto.permissions.partials.form')
        {!! Form::close() !!}
    </div>
</div>
@endsection