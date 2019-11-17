 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
    </a>

 <!-- Sidebar -->
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          <li class="nav-item">
            <a href="{{ url('inventaris') }}" class="nav-link">
            <i class="fas fa-briefcase"></i>
              <p>
                inventaris
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('peminjaman') }}" class="nav-link">
            <i class="far fa-edit"></i>
              <p>
                peminjamam
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('pengembalian') }}" class="nav-link">
            <i class="fas fa-book"></i>
              <p>
                pengembalian
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('user') }}" class="nav-link">
            <i class="fa fa-user"></i>
              <p>
                user
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ url('laporan') }}" class="nav-link">
            <i class="fas fa-laptop"></i>
              <p>
                laporan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
              <i class="fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
