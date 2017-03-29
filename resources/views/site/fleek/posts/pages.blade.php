@extends('site.fleek.layouts.default')

@section('content')

@include('site.fleek.partials.header-internas', ['title'=>$post->title,'h1'=>$post->title,'h2'=>$post->content])

@include('site.fleek.partials.pages.'.$post->slug)

@endsection