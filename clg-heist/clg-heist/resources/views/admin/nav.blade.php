 <!-- partial:partials/_sidebar.html -->
 <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-start fixed-top mx-4">
        <a class="navbar-brand mt-3" href="index.html" style="color:white">Admin</a>
          <!-- <a class="sidebar-brand brand-logo" href="index.html"><img src="admin/assets/images/logo.svg" alt="logo" /></a> -->
          <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('admindash')}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Events</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('create_event')}}">Create Events</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('showevent')}}">All Events</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#alumni" aria-expanded="false" aria-controls="alumni">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Alumni</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="alumni">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('show_register')}}">All Alumni</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('show_contact')}}">Messages</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#blogs" aria-expanded="false" aria-controls="blogs">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Blogs</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="blogs">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('create_blog')}}">Create Blog</a></li>
                <li class="nav-item"> <a class="nav-link" href="{{route('show_blog')}}">All Blogs</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('show_review')}}">
              <span class="menu-icon">
                <i class="mdi mdi-file-document-box"></i>
              </span>
              <span class="menu-title">Testimonials</span>
            </a>
          </li>
          <li class="nav-item menu-items">
          <form action="{{route('adminlogout')}}" method="post" >
            @csrf
            <a class="nav-link">
              <span class="menu-icon">
                <i class="mdi mdi-contacts"></i>
              </span>
              <button type="submit" style="background-color:#191c24;color:#6c7293; border:none;">Logout</button>
            </a>
          </form>
          </li>
        </ul>
      </nav>
      <!-- partial -->