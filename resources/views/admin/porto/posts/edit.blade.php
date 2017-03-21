@extends('admin.porto.layout')
@section('content')
<div clas="row">
    <div class="col-md-12">        
        {!! Form::model($post, ['route' => ['admin.posts.update', $post->id], 'class' => 'form-horizontal','method'=>'POST', 'files'=>true]) !!}
        {!! method_field('PUT') !!}  
        @include('admin.porto.posts.partials.form')
        {!! Form::close() !!}
    </div>
</div>
@endsection