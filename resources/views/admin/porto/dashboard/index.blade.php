@extends('admin.porto.layout')
@push('scripts')
<script src="{{ asset('assets/admin/porto/javascripts/dashboard/examples.dashboard.js') }}"></script>
@endpush
@section('content')
<div class="row">
    <div class="col-md-6 col-lg-12 col-xl-6">
        <div class="row">            
            @foreach($types as $type)
            <div class="col-md-12 col-lg-6 col-xl-6">
                <section class="panel panel-featured-left panel-featured-primary">
                    <div class="panel-body">
                        <div class="widget-summary">
                            <div class="widget-summary-col widget-summary-col-icon">
                                <div class="summary-icon bg-primary">
                                    <i class="{{ trans($type->icon) }}"></i>
                                </div>
                            </div>
                            <div class="widget-summary-col">
                                <div class="summary">
                                    <h4 class="title">{{ trans($type->title) }}</h4>
                                    <div class="info">
                                        <strong class="amount">{{ $type->posts->count() }}</strong>
                                        <span class="text-primary">({{ $type->posts->where('status', 1)->count() }} {{ trans('type.active') }})</span>
                                    </div>
                                </div>
                                <div class="summary-footer">
                                    <a href="{{ route('admin.posts.index', $type->id) }}" class="text-muted text-uppercase">({{ trans('type.view_all') }})</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            @endforeach           
        </div>
    </div>
</div>
@endsection