@extends('admin.porto.layout')
@section('content')
<div clas="row">
    <div class="col-md-12">        
        {!! Form::model($option, ['route' => ['admin.options.update', $option->id], 'class' => 'form-horizontal']) !!}
        {!! method_field('PUT') !!}  
        @include('admin.porto.options.partials.form')
        {!! Form::close() !!}
    </div>
</div>
@endsection