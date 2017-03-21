<header class="header">
    <div class="logo-container">
        <a href="#" class="logo">
            <img src="{{ asset('assets/admin/porto/images/logo.png') }}" height="35" alt="Porto Admin" />
        </a>
        <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
            <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
        </div>
    </div>
    <div class="header-right">
        
        <span class="separator"></span>
        <div id="userbox" class="userbox">
            <a href="#" data-toggle="dropdown">
                <figure class="profile-picture">
                    <img src="{{ asset('assets/admin/porto/images/logged-user.jpg') }}" alt="{{ Auth::user()->name }}" class="img-circle" data-lock-picture="{{ asset('assets/admin/porto/images/%21logged-user.jpg') }}" />
                </figure>
                <div class="profile-info" data-lock-name="{{ Auth::user()->name }}" data-lock-email="{{ Auth::user()->email }}">
                    <span class="name">{{ Auth::user()->name }}</span>
                    <span class="role">administrator</span>
                </div>
                <i class="fa custom-caret"></i>
            </a>
            <div class="dropdown-menu">
                <ul class="list-unstyled">
                    <li class="divider"></li>
                    <li>
                        <form method="POST" action="{{ route('logout') }}">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-link"><i class="fa fa-power-off"></i>{{ trans('user.logout') }}</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>