@if (count($errors) > 0)
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
<section class="panel">
    <header class="panel-heading">
        <div class="panel-actions">
            <a href="#" class="panel-action panel-action-toggle" data-panel-toggle=""></a>
        </div>
        <h2 class="panel-title">{{ trans('campaign.title_form_create') }}</h2>
        <p class="panel-subtitle">{{ trans('campaign.subtitle_form_create') }}</p>
    </header>
    <div class="panel-body">
        <div class="row form-group">
            <div class="col-lg-5">
                {!! Form::label('title', trans('campaign.name')) !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'title', 'placeholder' => 'Name']) !!}
            </div>  
            <div class="col-lg-4">
                {!! Form::label('email', trans('campaign.email')) !!}
                {!! Form::text('email', null, ['class' => 'form-control', 'id' => 'email', 'placeholder' => 'Email']) !!}
            </div>           
            <div class="col-lg-4">
                {!! Form::label('phone', trans('campaign.phone')) !!}
                {!! Form::text('phone', null, ['class' => 'form-control', 'id' => 'phone', 'placeholder' => 'Phone']) !!}
            </div>           
        </div>
        <div class="row form-group">
            <div class="col-lg-12">
                {!! Form::label('content', trans('campaign.content')) !!}
                {!! Form::textarea('content', null, ['class' => 'form-control', 'id' => 'content', 'rows' => 5, 'placeholder' => 'Content']) !!}
            </div>
        </div>

    </div>
    <footer class="panel-footer">
        <button campaign="submit" class="btn btn-primary">{{ trans('campaign.save') }}</button>
    </footer>
</section>