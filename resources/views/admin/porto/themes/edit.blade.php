@extends('admin.porto.layout')
@section('content')
<div clas="row">
    <div class="col-md-12">        
        {!! Form::model($theme, ['route' => ['admin.themes.update', $theme->id], 'class' => 'form-horizontal']) !!}
        {!! method_field('PUT') !!}  
        @include('admin.porto.themes.partials.form')
        {!! Form::close() !!}
    </div>
</div>
@endsection