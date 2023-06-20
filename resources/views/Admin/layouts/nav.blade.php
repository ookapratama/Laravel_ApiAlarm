<div class="navbar-bg"></div>
<nav class="navbar navbar-expand-lg main-navbar">
    <form class="form-inline mr-auto">
        <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
            <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i
                        class="fas fa-search"></i></a></li>
        </ul>
        
    </form>
    <ul class="navbar-nav navbar-right">
        
        <li class="dropdown"><a href="#" data-toggle="dropdown"
                class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                <img alt="image" src="../assets/img/avatar/avatar-1.png" class="rounded-circle mr-1">
                <div class="d-sm-none d-lg-inline-block">Hi, Ujang Maman</div>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
                
                <div class="dropdown-divider"></div>
                <a href="{{ route('auth.login') }} " class="dropdown-item has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i> Logout
                </a>
            </div>
        </li>
    </ul>
</nav>
<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="index.html">Administrator</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">AD</a>
        </div>
        <ul class="sidebar-menu">
            
           
            <li class="{{ $title == 'Dashboard' ? 'active' : '' }}"><a class="nav-link" href="{{ route('admin.dashboard') }}"><i class="far fa-square"></i> <span>Dashboard</span></a></li>
            
            
            <li class="{{ $title == 'Mahasiswa' ? 'active' : '' }}"><a class="nav-link " href="{{ route('mahasiswa.index') }}"><i class="ion-android-people"></i> <span>Mahasiswa</span></a>
            </li>
            <li class="{{ $title == 'Jadwal' ? 'active' : '' }}"><a class="nav-link " href="{{ route('index.jadwal') }}"><i class="ion-android-calendar"></i> <span>Jadwal</span></a>
            </li>
            <li class="{{ $title == 'Mata Kuliah' ? 'active' : '' }}"><a class="nav-link " href="{{ route('index.matakuliah') }}"><i class="ion-android-create
               "></i> <span>Mata Kuliah</span></a>
            </li>
            <li class="{{ $title == 'Dosen' ? 'active' : '' }}"><a class="nav-link " href="{{ route('index.dosen') }}"><i class="ion-ios-people"></i> <span>Dosen</span></a>
            </li>
            <li class="{{ $title == 'Admin' ? 'active' : '' }}"><a class="nav-link " href="{{ route('form.admin') }}"><i class="ion-lock-combination
               "></i> <span>Admin</span></a>
            </li>
        </ul>

    </aside>
</div>
