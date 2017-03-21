@extends($layout)
@section('title', isset($options->meta_title)? $options->meta_title : 'Contact')
@section('description', isset($options->meta_description)? $options->meta_description : 'Contact')
@section('author', isset($options->meta_author)? $options->meta_author : 'Contact')
@section('content')
<div class="row contact">
    <div class="col-md-6 col-md-offset-3">
        <div class="well">
            <h2>{{ $post->title }}</h2>
            <p>{{ $post->content }}</p>
        </div>
        @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
        @endif
        <form action="{{ route('lead.store') }}" accept-charset="UTF-8" method="post">
            {!! csrf_field() !!}
            <div class="form-group">
                <label for="InputName">Nome</label>
                <input name="name" type="text" class="form-control" id="InputName" placeholder="Nome">
            </div>
            <div class="form-group">
                <label for="InputEmail">Email</label>
                <input name="email" type="email" class="form-control" id="InputEmail" placeholder="Email">
            </div>  
            <div class="form-group">
                <label for="InputPhone">Phone</label>
                <input name="phone" type="text" class="form-control" id="InputPhone" placeholder="Phone">
            </div>             
            <div class="form-group">
                <label for="InputMessage">Mensagem</label>
                <textarea name="content" class="form-control" id="InputMessage" placeholder="Mensagem"></textarea>
            </div> 
            <button type="submit" class="btn btn-default">Enviar</button>
        </form>
    </div>
</div>
@endsection