<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <img src="{{ URL::asset('/assets/img/brand/blue.png') }}" class="navbar-brand-img" alt="...">
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="dashboard.php">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="user_tables.php">
                <i class="ni ni-single-02 text-orange"></i>
                <span class="nav-link-text">User</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="subsidies_tables.php">
                <i class="ni ni-basket text-primary"></i>
                <span class="nav-link-text">Subsidies</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="profile.html">
                <i class="ni ni-cart text-yellow"></i>
                <span class="nav-link-text">Cart</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('admin/contact') }}">
                <i class="ni ni-email-83 text-green"></i>
                <span class="nav-link-text">Contact</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>