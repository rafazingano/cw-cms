@extends('admin.porto.layout')
@section('content')
<div clas="row">
    <div class="col-md-12">        
        {!! Form::open(['route' => ['admin.posts.store'], 'class' => 'form-horizontal','method'=>'POST', 'files'=>true]) !!}
        @include('admin.porto.posts.partials.form')
        {!! Form::close() !!}
    </div>
</div>
@endsection