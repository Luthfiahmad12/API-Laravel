<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{ asset('img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8">
        <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('images/admin.png') }}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="/admin/profil" class="d-block">Admin</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/admin" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('mahasiswa.index') }}" class="nav-link">
                        <i class="nav-icon fas fa-folder-open"></i>
                        <p>
                            Kelola data
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link"
                        onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                        <i class="nav-icon fas fa-sign-out-alt"></i>
                        <p>
                            Sign Out
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <form id="logout-form" action="" method="POST" style="display: none;">
            @csrf
        </form>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
