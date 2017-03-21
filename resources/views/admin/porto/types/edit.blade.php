@extends('admin.porto.layout')
@section('content')
<div clas="row">
    <div class="col-md-12">        
        {!! Form::model($type, ['route' => ['admin.types.update', $type->id], 'class' => 'form-horizontal']) !!}
        {!! method_field('PUT') !!}  
        @include('admin.porto.types.partials.form')
        {!! Form::close() !!}
    </div>
</div>
@endsection