@extends('admin.porto.layout')
@section('content')
<div clas="row">
    <div class="col-md-12">        
        {!! Form::model($leadrule, ['route' => ['admin.leadrules.update', $leadrule->id], 'class' => 'form-horizontal']) !!}
        {!! method_field('PUT') !!}  
        @include('admin.porto.leadrules.partials.form')
        {!! Form::close() !!}
    </div>
</div>
@endsection