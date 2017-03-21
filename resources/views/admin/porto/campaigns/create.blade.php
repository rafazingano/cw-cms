@extends('admin.porto.layout')
@section('content')
<div clas="row">
    <div class="col-md-12">        
        {!! Form::open(['route' => ['admin.campaigns.store'], 'class' => 'form-horizontal']) !!}
        @include('admin.porto.campaigns.partials.form')
        {!! Form::close() !!}
    </div>
</div>
@endsection