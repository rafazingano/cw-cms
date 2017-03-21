@extends('admin.porto.layout')
@section('content')
<div clas="row">
    <div class="col-md-12">        
        {!! Form::model($permission, ['route' => ['admin.permissions.update', $permission->id], 'class' => 'form-horizontal']) !!}
        {!! method_field('PUT') !!}  
        @include('admin.porto.permissions.partials.form')
        {!! Form::close() !!}
    </div>
</div>
@endsection