<div class="site-menubar">
    <ul class="site-menu">
        @auth
            <li class="site-menu-item {{ $active == '1' ? 'active' : '' }}">
                <a class="animsition-link" href="{{ url('/home') }}">
                    <i class="site-menu-icon md-view-dashboard" aria-hidden="true"></i>
                    <span class="site-menu-title">Dashboard</span>
                </a>
            </li>
            <li class="site-menu-item has-sub {{ $active == '2' ? 'active' : '' }}">
                <a href="javascript:void(0)">
                    <i class="site-menu-icon md-border-all" aria-hidden="true"></i>
                    <span class="site-menu-title">Master</span>
                    <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                    @if (Auth::user()->role === 'developer')
                        <li class="site-menu-item">
                            <a class="animsition-link" href="{{ url('master/user') }}">
                                <span class="site-menu-title">User</span>
                            </a>
                        </li>
                    @endif
                    <li class="site-menu-item">
                        <a class="animsition-link" href="#">
                            <span class="site-menu-title">Vendor</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="site-menu-item has-sub {{ $active == '3' ? 'active' : '' }}">
                <a href="javascript:void(0)">
                    <i class="site-menu-icon md-google-pages" aria-hidden="true"></i>
                    <span class="site-menu-title">Produksi</span>
                    <span class="site-menu-arrow"></span>
                </a>
                <ul class="site-menu-sub">
                    <li class="site-menu-item">
                        <a class="animsition-link" href="#">
                            <span class="site-menu-title">Barang Masuk</span>
                        </a>
                    </li>
                    <li class="site-menu-item">
                        <a class="animsition-link" href="#">
                            <span class="site-menu-title">Dyeing</span>
                        </a>
                    </li>
                </ul>
            </li>
        @endauth
    </ul>
</div>
<div class="site-menubar-footer px-0 bg-white text-white">
    <div class="m-20">

    </div>
</div>
