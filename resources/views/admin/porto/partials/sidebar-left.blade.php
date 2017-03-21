<aside id="sidebar-left" class="sidebar-left">
    <div class="sidebar-header">
        <div class="sidebar-title"> Navigation </div>
        <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>
    <div class="nano">
        <div class="nano-content">
            <nav id="menu" class="nav-main" role="navigation">
                <ul class="nav nav-main">
                    <li class="nav-active"><a href="{{ route('admin.dashboard.index') }}"><i class="fa fa-home" aria-hidden="true"></i><span>Dashboard</span></a></li>
                    @foreach($types_all as $all_type)
                    <li class="nav-parent">
                        <a><i class="fa fa-copy" aria-hidden="true"></i><span>{{ trans($all_type->title) }}</span></a>
                        <ul class="nav nav-children">
                            <li><a href="{{ route('admin.posts.index', $all_type->id) }}">{{ trans('type.list') }}</a></li>
                            <li><a href="{{ route('admin.posts.create', $all_type->id) }}">{{ trans('type.create') }}</a></li>
                        </ul>
                    </li>
                    @endforeach
                    <li class="nav-parent">
                        <a><i class="fa fa-users" aria-hidden="true"></i><span>{{ trans('user.users') }}</span></a>
                        <ul class="nav nav-children">                           
                            <li><a href="{{ route('admin.users.index') }}">{{ trans('user.list') }}</a></li>
                            <li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>{{ trans('user.create') }}</a></li>
                        </ul>
                    </li>
                    <li class="nav-parent">
                        <a><i class="fa fa-copy" aria-hidden="true"></i><span>{{ trans('crm.panel') }}</span></a>
                        <ul class="nav nav-children">
                            <li><a href="{{ route('admin.leads.index') }}">{{ trans('crm.leads') }}</a></li>
                            <li><a href="{{ route('admin.leadrules.index') }}">{{ trans('crm.leadrules') }}</a></li>
                            <li><a href="{{ route('admin.campaigns.index') }}">{{ trans('crm.campaigns') }}</a></li>
                        </ul>
                    </li> 
                    <li class="nav-parent">
                        <a><i class="fa fa-copy" aria-hidden="true"></i><span>{{ trans('config.config') }}</span></a>
                        <ul class="nav nav-children">
                            <li><a href="{{ route('admin.options.index') }}">{{ trans('option.options') }}</a></li>
                            <li><a href="{{ route('admin.types.index') }}">{{ trans('type.types') }}</a></li>
                            <li><a href="{{ route('admin.themes.index') }}">{{ trans('theme.themes') }}</a></li>
                            <li><a href="{{ route('admin.sites.index') }}">{{ trans('site.sites') }}</a></li>
                        </ul>
                    </li> 
                </ul>
            </nav>
            <hr class="separator" />                    
        </div>
        <script>
            // Maintain Scroll Position
            if (typeof localStorage !== 'undefined') {
                if (localStorage.getItem('sidebar-left-position') !== null) {
                    var initialPosition = localStorage.getItem('sidebar-left-position'),
                            sidebarLeft = document.querySelector('#sidebar-left .nano-content');

                    sidebarLeft.scrollTop = initialPosition;
                }
            }
        </script>
    </div>
</aside>