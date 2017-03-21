<section class="panel">
    <header class="panel-heading">
        <div class="panel-actions">
            <a href="#" class="panel-action panel-action-toggle" data-panel-toggle=""></a>
        </div>
        <h2 class="panel-title">{{ trans('option.title_form_create') }}</h2>
        <p class="panel-subtitle">{{ trans('option.subtitle_form_create') }}</p>
    </header>
    <div class="panel-body">
        <div class="row form-group">
            <div class="col-lg-4">
                {!! Form::label('label', trans('option.label')) !!}
                {!! Form::text('label', null, ['class' => 'form-control', 'id' => 'label', 'placeholder' => trans('option.label')]) !!}
            </div>
            <div class="mb-md hidden-lg hidden-xl"></div>
            <div class="col-lg-4">
                {!! Form::label('name', trans('option.name')) !!}
                {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name', 'placeholder' => trans('option.name')]) !!}
            </div>
            <div class="mb-md hidden-lg hidden-xl"></div>
            <div class="col-lg-4">
                {!! Form::label('field', trans('option.field')) !!}
                
                {!! Form::select('field_id', $fields, null, ['class' => 'form-control', 'id' => 'field', 'placeholder' => trans('option.field')]) !!}
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                {!! Form::label('description', trans('option.description')) !!}
                {!! Form::textarea('description', null, ['class' => 'form-control', 'id' => 'description', 'rows' => 5, 'placeholder' => trans('option.description')]) !!}
            </div>
        </div>
    </div>
    <footer class="panel-footer">
        <button type="submit" class="btn btn-primary">{{ trans('option.save') }}</button>
    </footer>
</section>
