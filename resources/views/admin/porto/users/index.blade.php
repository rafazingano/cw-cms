@extends('admin.porto.layout')
@section('content')
<section class="panel">
    <header class="panel-heading">
        <div class="panel-actions">
            <a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
        </div>
        <h2 class="panel-title">{{ trans('user.list') }}</h2>
    </header>
    <div class="panel-body">
        <table class="table table-bordered table-striped mb-none" id="datatable-users">
            <thead>
                <tr>
                    <th>{{ trans('user.id') }}</th>
                    <th>{{ trans('user.name') }}</th>
                    <th>{{ trans('user.email') }}</th>
                    <th class="hidden-xs">{{ trans('user.updated_at') }}</th>
                    <th class="hidden-xs">{{ trans('user.created_at') }}</th>
                    <th>{{ trans('user.action') }}</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td class="center hidden-xs">{{ $user->updated_at }}</td>
                    <td class="center hidden-xs">{{ $user->created_at }}</td>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-eye-open"></i></button>
                            <a href='{{ route('admin.users.edit', $user->id) }}' class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
                            <button type="button" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></button>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</section>
@endsection