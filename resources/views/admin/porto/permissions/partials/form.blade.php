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
        <h2 class="panel-title">{{ trans('permission.title_form_create') }}</h2>
        <p class="panel-subtitle">{{ trans('permission.subtitle_form_create') }}</p>
    </header>
    <div class="panel-body">
        <div class="row form-group">
            <div class="col-lg-5">
                {!! Form::label('title', trans('permission.title')) !!}
                {!! Form::text('title', null, ['class' => 'form-control', 'id' => 'title', 'placeholder' => 'Title']) !!}
            </div>  
            <div class="col-lg-4">
                {!! Form::label('slug', trans('permission.slug')) !!}
                {!! Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug', 'placeholder' => 'Slug']) !!}
            </div>
            <div class="col-lg-3">
                {!! Form::label('icon', trans('permission.icon')) !!}
                {!! Form::text('icon', null, ['class' => 'form-control', 'id' => 'icon', 'placeholder' => 'Icon (Class)']) !!}
            </div>             
        </div>
        <div class="row form-group">
            <div class="col-lg-12">
                {!! Form::label('description', trans('permission.description')) !!}
                {!! Form::textarea('description', null, ['class' => 'form-control', 'id' => 'description', 'rows' => 5, 'placeholder' => 'Description']) !!}
            </div>
        </div>
        <div class="row form-group">
            @foreach($options as $option)            
            <div class="col-lg-4">   

                <div class="alert alert-info">
                    <strong>{{ trans($option->label) }}</strong> {{ $option->permission }}
                    <div class="pull-right">{!! Form::checkbox('options[' . $option->name . ']', $option->id, isset($permission)? $permission->options->contains($option->id) : null) !!}</div>
                    <p>{{ trans('option.value') }}</p>
                    {!! field_form_mount(['permission' => 'textarea', 'name' => 'options[' . $option->id . '][value]', 'value' => isset($permission->options()->where('option_id', $option->id)->first()->pivot->value) ? $permission->options()->where('option_id', $option->id)->first()->pivot->value : '']) !!} 
                    <p class="help-block">{{ $option->description }}</p>
                </div>                        
            </div>
            @endforeach
        </div>
        <!--div class="row form-group">
            <div class="col-lg-4">
                {!! Form::select('option[]', ['teste', 'teste2'], null, ['class' => 'form-control', 'placeholder' => 'Option']) !!}
            </div>
        </div-->
    </div>
    <footer class="panel-footer">
        <button permission="submit" class="btn btn-primary">{{ trans('permission.save') }}</button>
    </footer>
</section>