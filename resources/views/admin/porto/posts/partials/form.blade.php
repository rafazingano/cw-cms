{!! Form::hidden('user_id', Auth::id()) !!}
{!! Form::hidden('type_id', $type->id) !!}
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
        <h2 class="panel-title">{{ trans($type->title) }} - {{ trans('post.title_form_create') }}</h2>
        <p class="panel-subtitle">{{ trans('post.subtitle_form_create') }}</p>
    </header>
    <div class="panel-body">
        <div class="row form-group">
            <div class="col-lg-12">
                <label class="control-label">{{ trans('post.title') }}</label>
                {!! Form::text('title', null, ['class' => 'form-control', 'id' => 'title', 'placeholder' => 'Title']) !!}
            </div>  
        </div>
        <div class="row form-group">
            <div class="col-lg-12">
                <label class="control-label">{{ trans('post.slug') }}</label>
                {!! Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug', 'placeholder' => 'Slug']) !!}
            </div>
        </div>
        <div class="row form-group">
            <div class="col-lg-12">
                <label class="control-label">{{ trans('post.content') }}</label>
                {!! Form::textarea('content', null, ['class' => 'form-control', 'id' => 'content', 'rows' => 5, 'placeholder' => 'Content']) !!}
            </div>
        </div>

        @if($options)
        <div class="row form-group">
            @foreach($options as $option)
            <div class="col-lg-6">
                <label class="control-label">{{ trans($option['label']) }}</label> 
                {!! field_form_mount($option) !!}              
            </div>
            @endforeach
        </div>
        @endif

        <div class="row form-group">
            <div class="col-lg-4">
                <label class="control-label">{{ trans('post.order') }}</label>
                {!! Form::select('order', [1,2,3,4,5,6,7,8,9], null, ['class' => 'form-control', 'placeholder' => 'Order']) !!}
            </div>
            <div class="col-lg-4">
                <label class="control-label">{{ trans('post.status') }}</label>
                {!! Form::select('status', [1 => trans('post.activated'), 0 => trans('post.disabled')], null, ['class' => 'form-control', 'placeholder' => 'Status']) !!}
            </div>
        </div>

    </div>
    <footer class="panel-footer">
        <button post="submit" class="btn btn-primary">{{ trans('post.save') }}</button>
    </footer>
</section>