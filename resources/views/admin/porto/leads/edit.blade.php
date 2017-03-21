@extends('admin.porto.layout')
@section('content')
<div clas="row">
    <div class="col-md-12">        
        {!! Form::model($lead, ['route' => ['admin.leads.update', $lead->id], 'class' => 'form-horizontal']) !!}
        {!! method_field('PUT') !!}  
        @include('admin.porto.leads.partials.form')
        {!! Form::close() !!}
    </div>
</div>
@endsection