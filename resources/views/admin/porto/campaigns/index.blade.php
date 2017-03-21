@extends('admin.porto.layout')
@section('content')
<section class="panel">
    <header class="panel-heading">
        <div class="panel-actions">
            <a href="{{ route('admin.campaigns.create') }}" class="fa fa-plus"></a>
            <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>          
        </div>
        <h2 class="panel-title">{{ trans('campaign.list') }}</h2>
    </header>
    <div class="panel-body">
        <table class="table table-bordered table-striped mb-none" id="datatable-campaigns">
            <thead>
                <tr>
                    <th>{{ trans('campaign.id') }}</th>
                    <th>{{ trans('campaign.name') }}</th>
                    <th class="hidden-xs">{{ trans('campaign.updated_at') }}</th>
                    <th class="hidden-xs">{{ trans('campaign.created_at') }}</th>
                    <th>{{ trans('campaign.action') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($campaigns as $t)
                <tr>
                    <td>{{ $t->id }}</td>
                    <td>{{ $t->name }}</td>
                    <td class="center hidden-xs">{{ $t->updated_at }}</td>
                    <td class="center hidden-xs">{{ $t->created_at }}</td>
                    <td>
                        <div class="btn-group">
                            {!! Form::model($t, ['method' => 'DELETE', 'route' => ['admin.campaigns.destroy', $t->id]]) !!}
                            <a href="#modalAnim-{{ $t->id }}" class="btn btn-primary btn-xs modal-with-zoom-anim"><i class="glyphicon glyphicon-eye-open"></i></a>
                            <a href='{{ route('admin.campaigns.edit', $t->id) }}' class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
                            <button campaign="submit" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></button>
                            {!! Form::close() !!}
                        </div>

                        <div id="modalAnim-{{ $t->id }}" class="zoom-anim-dialog modal-block modal-block-primary mfp-hide">
                            <section class="panel">
                                <header class="panel-heading">
                                    <h2 class="panel-title">{{ trans('campaign.campaign') }}</h2>
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
                                            <button class="btn btn-default modal-dismiss">{{ trans('campaign.cancel') }}</button>
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