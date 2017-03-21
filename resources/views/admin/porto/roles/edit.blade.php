@extends('admin.porto.layout')
@section('content')
<div clas="row">
    <div class="col-md-12">        
        {!! Form::model($role, ['route' => ['admin.roles.update', $role->id], 'class' => 'form-horizontal']) !!}
        {!! method_field('PUT') !!}  
        @include('admin.porto.roles.partials.form')
        {!! Form::close() !!}
    </div>
</div>
@endsection