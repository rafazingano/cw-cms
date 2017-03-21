@extends('admin.porto.layout')
@section('content')
<div clas="row">
    <div class="col-md-12">        
        {!! Form::open(['route' => ['admin.sites.store'], 'class' => 'form-horizontal']) !!}
        @include('admin.porto.sites.partials.form')
        {!! Form::close() !!}
    </div>
</div>
@endsection