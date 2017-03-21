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
        <h2 class="panel-title">{{ trans('site.title_form_create') }}</h2>
        <p class="panel-subtitle">{{ trans('site.subtitle_form_create') }}</p>
    </header>
    <div class="panel-body">
        <div class="row form-group">
            <div class="col-lg-8">
                {!! Form::label('title', trans('site.title')) !!}
                {!! Form::text('title', null, ['class' => 'form-control', 'id' => 'title', 'placeholder' => trans('site.title')]) !!}
            </div>  
            <div class="col-lg-4">
                {!! Form::label('theme', trans('site.theme')) !!}
                {!! Form::select('theme_id', $themes, null, ['class' => 'form-control', 'id' => 'theme']) !!}
            </div>         
        </div>
    </div>
    <footer class="panel-footer">
        <button site="submit" class="btn btn-primary">{{ trans('site.save') }}</button>
    </footer>
</section>