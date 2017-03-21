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
        <h2 class="panel-title">{{ trans('theme.title_form_create') }}</h2>
        <p class="panel-subtitle">{{ trans('theme.subtitle_form_create') }}</p>
    </header>
    <div class="panel-body">
        <div class="row form-group">
            <div class="col-lg-4">
                {!! Form::label('title', trans('theme.title')) !!}
                {!! Form::text('title', null, ['class' => 'form-control', 'id' => 'title', 'placeholder' => trans('theme.title')]) !!}
            </div> 
            <div class="col-lg-4">
                {!! Form::label('slug', trans('theme.slug')) !!}
                {!! Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug', 'placeholder' => trans('theme.slug')]) !!}
            </div> 
            
            <div class="col-lg-4">
                <label class="control-label">{{ trans('theme.status') }}</label>
                {!! Form::select('status', [1 => trans('theme.activated'), 0 => trans('theme.disabled')], null, ['class' => 'form-control', 'placeholder' => trans('theme.status')]) !!}
            </div>
        </div>
    </div>
    <footer class="panel-footer">
        <button type="submit" class="btn btn-primary">{{ trans('theme.save') }}</button>
    </footer>
</section>