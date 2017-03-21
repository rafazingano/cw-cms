<div class="tabs">
    <ul class="nav nav-tabs tabs-primary">
        <li class="active">
            <a href="#overview" data-toggle="tab">{{ trans('user.overview') }}</a>
        </li>
        <li>
            <a href="#edit" data-toggle="tab">{{ trans('user.edit') }}</a>
        </li>
    </ul>
    <div class="tab-content">
        <div id="overview" class="tab-pane active">
            @include('admin.porto.users.partials.timeline')
        </div>
        <div id="edit" class="tab-pane">
            
            {!! Form::model($user, ['route' => ['admin.users.update', $user->id], 'class' => 'form-horizontal']) !!}
            {!! method_field('PUT') !!}  
            @include('admin.porto.users.partials.form')
            {!! Form::close() !!}
        </div>
    </div>
</div>