@extends('admin.porto.layout')
@section('content')
<div clas="row">
    <div class="col-md-12">        
        {!! Form::model($site, ['route' => ['admin.sites.update', $site->id], 'class' => 'form-horizontal']) !!}
        {!! method_field('PUT') !!}  
        @include('admin.porto.sites.partials.form')
        {!! Form::close() !!}
    </div>
</div>
@endsection