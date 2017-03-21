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
        <h2 class="panel-title">{{ trans('leadrule.title_form_create') }}</h2>
        <p class="panel-subtitle">{{ trans('leadrule.subtitle_form_create') }}</p>
    </header>
    <div class="panel-body">
        <div class="row form-group">
            <div class="col-lg-6">
                {!! Form::label('title', trans('leadrule.title')) !!}
                {!! Form::text('title', null, ['class' => 'form-control', 'id' => 'title', 'placeholder' => trans('leadrule.title')]) !!}
            </div>  
            <div class="col-lg-6">
                {!! Form::label('slug', trans('leadrule.slug')) !!}
                {!! Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug', 'placeholder' => trans('leadrule.slug')]) !!}
            </div>                    
        </div>
        <div class="row form-group">
            <div class="col-lg-6 col-md-6">
                {!! Form::label('users', trans('leadrule.users')) !!}
                {!! Form::select('users[]', $users, isset($leadrule)? array_pluck($leadrule->users, 'id') : null, ['size' => 5, 'multiple' => 'multiple', 'class' => 'form-control', 'id' => 'users']) !!}
            </div>
            <div class="col-lg-6 col-md-6">
                {!! Form::label('description', trans('leadrule.description')) !!}
                {!! Form::textarea('description', null, ['class' => 'form-control', 'id' => 'description', 'rows' => 5, 'placeholder' => 'Description']) !!}
            </div>
        </div>        
    </div>
    <footer class="panel-footer">
        <button leadrule="submit" class="btn btn-primary">{{ trans('leadrule.save') }}</button>
    </footer>
</section>