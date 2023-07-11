<nav class="site-navbar navbar navbar-default navbar-fixed-top navbar-mega" role="navigation">

    <div class="navbar-header">
        <div class="navbar-brand navbar-brand-center">
            <img class="navbar-brand-logo" src="{{ asset('template/assets/images/logo.png') }}" title="Remark">
            <span class="navbar-brand-text hidden-xs-down"> MY APP</span>
        </div>

        <button type="button" class="navbar-toggler hamburger hamburger-close navbar-toggler-left hided" data-toggle="menubar">
            <span class="sr-only">Toggle navigation</span>
            <span class="hamburger-bar"></span>
        </button>
    </div>

    <div class="navbar-container container-fluid">
        <!-- Navbar Collapse -->
        <div class="collapse navbar-collapse navbar-collapse-toolbar" id="site-navbar-collapse">
            <!-- Navbar Toolbar -->
            <ul class="nav navbar-toolbar">
                <li class="nav-item hidden-float" id="toggleMenubar">
                    <a class="nav-link" data-toggle="menubar" href="#" role="button">
                        <i class="icon hamburger hamburger-arrow-left">
                            <span class="sr-only">Toggle menubar</span>
                            <span class="hamburger-bar"></span>
                        </i>
                    </a>
                </li>
                <li class="nav-item hidden-sm-down" id="toggleFullscreen">
                    <a class="nav-link icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
                        <span class="sr-only">Toggle fullscreen</span>
                    </a>
                </li>
            </ul>
            <!-- End Navbar Toolbar -->

            <!-- Navbar Toolbar Right -->
            @auth
                <ul class="nav navbar-toolbar navbar-right navbar-toolbar-right">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="#">
                            {{ Auth::user()->name }} | {{ Auth::user()->username }}
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link navbar-avatar" data-toggle="dropdown" href="#" aria-expanded="false" data-animation="scale-up" role="button">
                            <span class="avatar avatar-online">
                                <img src="{{ asset('template/global/portraits/default.jpg') }}" alt="...">
                                <i></i>
                            </span>
                        </a>
                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" href="javascript:void(0)" role="menuitem"><i class="icon md-settings" aria-hidden="true"></i> Settings</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ url('logout') }}" role="menuitem"><i class="icon md-power" aria-hidden="true"></i> Logout</a>
                        </div>
                    </li>
                </ul>
            @endauth
            <!-- End Navbar Toolbar Right -->
        </div>
        <!-- End Navbar Collapse -->
    </div>
</nav>
