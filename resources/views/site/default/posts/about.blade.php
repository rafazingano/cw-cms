@extends($layout)
@section('title', isset($options->meta_title)? $options->meta_title : 'About')
@section('description', isset($options->meta_description)? $options->meta_description : 'About')
@section('author', isset($options->meta_author)? $options->meta_author : 'About')

@section('content')
<div class="row contact">
    <div class="col-md-8 col-md-offset-2">
        <div class="well">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
        </div>
    </div>
</div>
@endsection