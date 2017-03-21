@extends('admin.porto.layout')
@section('content')

<section class="panel">
    <header class="panel-heading">
        <div class="panel-actions">
            <a href="{{ route('admin.options.create') }}" class="fa fa-plus"></a>
            <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
        </div>
        <h2 class="panel-title">{{ trans('option.list') }}</h2>
    </header>
    <div class="panel-body">
        <table class="table table-bordered table-striped mb-none" id="datatable-users">
            <thead>
                <tr>
                    <th>{{ trans('option.id') }}</th>
                    <th>{{ trans('option.label') }}</th>
                    <th>{{ trans('option.name') }}</th>
                    <th>{{ trans('option.type') }}</th>
                    <th class="hidden-xs">{{ trans('option.updated_at') }}</th>
                    <th class="hidden-xs">{{ trans('option.created_at') }}</th>
                    <th>{{ trans('option.action') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($options as $o)
                <tr>
                    <td>{{ $o->id }}</td>
                    <td>{{ trans($o->label) }}</td>
                    <td>{{ $o->name }}</td>
                    <td>{{ $o->type }}</td>
                    <td class="center hidden-xs">{{ $o->updated_at }}</td>
                    <td class="center hidden-xs">{{ $o->created_at }}</td>
                    <td>
                        <div class="btn-group">
                            {!! Form::model($o, ['method' => 'DELETE', 'route' => ['admin.options.destroy', $o->id]]) !!}
                            <a href="#modalAnim-{{ $o->id }}" class="btn btn-primary btn-xs modal-with-zoom-anim"><i class="glyphicon glyphicon-eye-open"></i></a>
                            <a href='{{ route('admin.options.edit', $o->id) }}' class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
                            <button type="submit" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></button>
                            {!! Form::close() !!}
                        </div>

                        <div id="modalAnim-{{ $o->id }}" class="zoom-anim-dialog modal-block modal-block-primary mfp-hide">
                            <section class="panel">
                                <header class="panel-heading">
                                    <h2 class="panel-title">{{ trans('option.option') }}</h2>
                                </header>
                                <div class="panel-body">
                                    <div class="modal-wrapper">
                                        <div class="modal-icon">
                                            <i class="fa fa-question-circle"></i>
                                        </div>
                                        <div class="modal-text">
                                            <p>Are you sure that you want to delete this image?</p>
                                        </div>
                                    </div>
                                </div>
                                <footer class="panel-footer">
                                    <div class="row">
                                        <div class="col-md-12 text-right">
                                            <button class="btn btn-default modal-dismiss">{{ trans('option.cancel') }}</button>
                                        </div>
                                    </div>
                                </footer>
                            </section>
                        </div>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection