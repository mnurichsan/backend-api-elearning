<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <img src="{{asset('asset_backend/img/AdminLTELogo.png')}}" alt="" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">E-learning</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('asset_backend/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Administrator</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{route('home')}}" class="nav-link {{ Route::currentRouteNamed('home')  ? 'active' : '' }} ">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Home
                        </p>
                    </a>
                </li>
                <li class="nav-header">Master Data</li>
                <li class="nav-item">
                    <a href="{{route('jurusan.index')}}" class="nav-link {{ Route::currentRouteNamed('jurusan.index')  ? 'active' : '' }} ">
                        <i class="nav-icon fas fa-fw fa-bookmark"></i>
                        <p>
                            Jurusan
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('kelas.index')}}" class="nav-link {{ Route::currentRouteNamed('kelas.index')  ? 'active' : '' }} ">
                        <i class="nav-icon fas fa-fw fa-school"></i>
                        <p>
                            Kelas
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('guru.index')}}" class="nav-link {{ Route::currentRouteNamed('guru.index')  ? 'active' : '' }} ">
                        <i class="nav-icon fas fa-fw fa-chalkboard-teacher"></i>
                        <p>
                            Guru
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('siswa.index')}}" class="nav-link {{ Route::currentRouteNamed('siswa.index')  ? 'active' : '' }} ">
                        <i class="nav-icon fas fa-fw fa-book-reader"></i>
                        <p>
                            Siswa
                        </p>
                    </a>
                </li>
                <li class="nav-header">Content</li>
                <li class="nav-item">
                    <a href="{{route('content.index')}}" class="nav-link {{ Route::currentRouteNamed('content.index')  ? 'active' : '' }} ">
                        <i class="nav-icon fas fa-fw fa-book-reader"></i>
                        <p>
                            Content
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>