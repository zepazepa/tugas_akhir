    <!-- Sidebar -->
    <div class="sidebar" data-background-color="dark">
        <div class="sidebar-logo">
            <!-- Logo Header -->
            <div class="logo-header" data-background-color="dark">
                <a href="index.html" class="logo d-block align-content-center ">
                    {{-- <img src="assets/img/kaiadmin/logo_light.svg" alt="navbar brand" class="navbar-brand" height="20" /> --}}
                    <h5 class="text-white m-0">Klasifikasi Teks Berita</h5>
                </a>
                <div class="nav-toggle">
                    <button class="btn btn-toggle toggle-sidebar">
                        <i class="gg-menu-right"></i>
                    </button>
                    <button class="btn btn-toggle sidenav-toggler">
                        <i class="gg-menu-left"></i>
                    </button>
                </div>
                <button class="topbar-toggler more">
                    <i class="gg-more-vertical-alt"></i>
                </button>
            </div>
            <!-- End Logo Header -->
        </div>
        <div class="sidebar-wrapper scrollbar scrollbar-inner">
            <div class="sidebar-content">
                <ul class="nav nav-secondary">
                    <li class="nav-item @yield('index')">
                        <a  href="{{ route("dashboard") }}">
                            <i class="fas fa-home"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="nav-item @yield('deteksi')">
                        <a href="{{ route('deteksi') }}">
                            <i class="fas fa-search"></i>
                            <p>Deteksi Topik</p>
                        </a>
                    </li >
                    <li class="nav-item @yield('berita')">
                        <a href="{{ route('berita.index') }}">
                            <i class="fas fa-chalkboard"></i>
                            <p>Data Berita</p>
                        </a>
                    </li >
                </ul>
            </div>
        </div>
    </div>
    <!-- End Sidebar -->
