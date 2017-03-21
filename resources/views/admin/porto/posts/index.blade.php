@extends('admin.porto.layout')
@section('content')
<section class="panel">
    <header class="panel-heading">
        <div class="panel-actions">
            <a href="{{ route('admin.posts.create', $type->id) }}" class="fa fa-plus"></a>
            <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
        </div>
        <h2 class="panel-title">{{ trans('post.list') }}</h2>
    </header>
    <div class="panel-body">
        <table class="table table-bordered table-striped mb-none" id="datatable-users">
            <thead>
                <tr>
                    <th>{{ trans('post.id') }}</th>
                    <th>{{ trans('post.title') }}</th>
                    <th class="hidden-xs">{{ trans('post.updated_at') }}</th>
                    <th class="hidden-xs">{{ trans('post.created_at') }}</th>
                    <th>{{ trans('post.action') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($type->posts as $p)
                <tr>
                    <td>{{ $p->id }}</td>
                    <td>{{ $p->title }}</td>
                    <td class="center hidden-xs">{{ $p->updated_at }}</td>
                    <td class="center hidden-xs">{{ $p->created_at }}</td>
                    <td>
                        <div class="btn-group">
                            {!! Form::model($p, ['method' => 'DELETE', 'route' => ['admin.posts.destroy', 'type_id' => $type->id, 'id' => $p->id]]) !!}
                            <a href="#modalAnim-{{ $p->id }}" class="btn btn-primary btn-xs modal-with-zoom-anim"><i class="glyphicon glyphicon-eye-open"></i></a>
                            <a href='{{ route('admin.posts.edit', $p->id) }}' class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
                            <button post="submit" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></button>
                            {!! Form::close() !!}
                        </div>

                        <div id="modalAnim-{{ $p->id }}" class="zoom-anim-dialog modal-block modal-block-primary mfp-hide">
                            <section class="panel">
                                <header class="panel-heading">
                                    <h2 class="panel-title">{{ trans('post.post') }}</h2>
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
                                            <button class="btn btn-default modal-dismiss">{{ trans('post.cancel') }}</button>
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