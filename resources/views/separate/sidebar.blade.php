<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="({{ route('dashboard') }})" class="brand-link">
      <img src="{{ asset('Template/dist/img/AdminLTELogo.png') }}" alt="Logo"
          class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Projek Sekolah</span>
  </a>

  <div class="user-panel mt-3 pb-3 mb-3 d-flex">
    <div class="image">
        <img src="{{ asset('template/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
            alt="User Image">
    </div>
    <div class="info">
        <a href="{{ route('user.profile', Auth::user()->id) }}" class="d-block text-white">{{ Auth::user()->name }}</a>
        {{-- href="{{ route('user.edit', Auth::user()->id) }}" --}}
    </div>
</div>

  <!-- Sidebar -->
  <div class="sidebar mt-2">
      <!-- SidebarSearch Form -->
      <div class="form-inline">
          <div class="input-group" data-widget="sidebar-search">
              <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                  aria-label="Search">
              <div class="input-group-append">
                  <button class="btn btn-sidebar">
                      <i class="fas fa-search fa-fw"></i>
                  </button>
              </div>
          </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
              data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
              <li class="nav-item">
                  <a href="{{ route('dashboard') }}" class="nav-link">
                      <i class="nav-icon fas fa-tachometer-alt"></i>
                      <p>
                          Dashboard
                      </p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="{{ route('cast.create') }}" class="nav-link @if (Request::segment(1) == 'cast') active @endif">
                      <i class="nav-icon fas fa-th"></i>
                      <p>
                          Form Cast
                      </p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="{{route('genre.create')}}" class="nav-link @if (Request::segment(1) == 'genre') active @endif">
                      <i class="nav-icon fas fa-th"></i>
                      <p>
                          Form Genre
                      </p>
                  </a>
              </li>
              
              <li class="nav-item">
                  <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-th"></i>
                      <p>
                          Create #
                      </p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-th"></i>
                      <p>
                          Create #
                      </p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="#" class="nav-link">
                      <i class="nav-icon fas fa-th"></i>
                      <p>
                          Create #
                      </p>
                  </a>
              </li>
              <li class="nav-item">
                <form action="{{ route('auth.logout')}}" method="POST">
                @csrf 
                <button type="submit" class="nav-link btn btn-light btn-sm">Logout</button>
                </form>
              </li>
          </ul>
      </nav>
  </div>
</aside>


<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
  <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
  </div>
</aside>
<!-- /.control-sidebar -->