<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
        <div class="sidebar-brand-icon rotate-n-15">

        </div>
        <div class="sidebar-brand-text mx-3">E-Learning</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Master Data
    </div>

    <!-- Nav Item - DriverMenu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <i class="fas fa-fw fa-bookmark"></i>
            <span>Jurusan</span>
        </a>
        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Jurusan</h6>
                <a class="collapse-item" href="{{route('jurusan.index')}}">All Jurusan</a>
                <a class="collapse-item" href="{{route('jurusan.trash')}}">Trash Jurusan</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-school"></i>
            <span>Kelas</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Kelas</h6>
                <a class="collapse-item" href="">All Kelas</a>
                <a class="collapse-item" href="">Trash Kelas</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
            <i class="fas fa-fw fa-chalkboard-teacher"></i>
            <span>Guru</span>
        </a>
        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Guru</h6>
                <a class="collapse-item" href="">All Guru</a>
                <a class="collapse-item" href="">Trash Guru</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
            <i class="fas fa-fw fa-book-reader"></i>
            <span>Siswa</span>
        </a>
        <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Siswa</h6>
                <a class="collapse-item" href="">All Siswa</a>
                <a class="collapse-item" href="">Trash Siswa</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider d-none d-md-block">
    <div class="sidebar-heading">
        Content
    </div>

    <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fas fa-fw fa-sms"></i>
            <span>Content</span>
        </a>
    </li>

    <!-- Divider -->
    <!-- <hr class="sidebar-divider"> -->

    <!-- Heading -->
    <!-- <div class="sidebar-heading">
        Modul Artikel
    </div> -->

    <!-- Nav Item - Pages Collapse Menu -->
    <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-bookmark"></i>
            <span>Category</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Category</h6>
                <a class="collapse-item" href="">All Category</a>
                <a class="collapse-item" href="">Trash Category</a>
            </div>
        </div>
    </li> -->

    <!-- Nav Item - Utilities Collapse Menu -->
    <!-- <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-newspaper"></i>
            <span>Artikel</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Artikel</h6>
                <a class="collapse-item" href="">All Artikel</a>
                <a class="collapse-item" href="">Trash Artikel</a>
            </div>
        </div>
    </li> -->


    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">
    <div class="sidebar-heading">
        Site Setting
    </div>

    <li class="nav-item">
        <a class="nav-link" href="">
            <i class="fas fa-fw fa-user"></i>
            <span>User Setting</span>
        </a>
    </li>


    <hr class="sidebar-divider d-none d-md-block">
    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>