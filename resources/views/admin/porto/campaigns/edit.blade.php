@extends('admin.porto.layout')
@section('content')
<div clas="row">
    <div class="col-md-12">        
        {!! Form::model($campaign, ['route' => ['admin.campaigns.update', $campaign->id], 'class' => 'form-horizontal']) !!}
        {!! method_field('PUT') !!}  
        @include('admin.porto.campaigns.partials.form')
        {!! Form::close() !!}
    </div>
</div>
@endsection