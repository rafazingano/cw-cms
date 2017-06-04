@extends('site.porto.layouts.default')

@section('title', isset($options->meta_title)? $options->meta_title : 'Post')
@section('description', isset($options->meta_description)? $options->meta_description : 'Post')
@section('author', isset($options->meta_author)? $options->meta_author : 'Post')

@section('content')



@endsection