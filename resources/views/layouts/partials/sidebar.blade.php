<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('assets/dist/img/logo1.jpg') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                @auth
                    <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                @else
                    <a href="" class="d-block">Al-Hilal</a>
                @endauth
            </div>
        </div>

        <!-- SidebarSearch Form -->
        <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div>
        <br>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
            with font-awesome or any other icon font library -->
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="fas fa-mosque"></i>
                        <p>
                            Panti Asuhan
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="anakasuh" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Anak Asuh</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="anakkeluar" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Anak Keluar</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="donatur" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Donatur</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <br>
                <li class="nav-item menu-open">
                    <a href="#" class="nav-link active">
                        <i class="fas fa-info-circle"></i>
                        <p>
                            Informasi
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/galeri" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Gallery</p>
                            </a>
                        </li>
                    </ul>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="/guru" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Data Pengasuh</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="/visi" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Visi Dan Misi</p>
                            </a>
                        </li>
                </li>

            </ul>
            </li>
            <br>


            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
