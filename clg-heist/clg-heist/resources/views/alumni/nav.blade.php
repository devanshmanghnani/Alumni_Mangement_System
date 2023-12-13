 <!-- partial:partials/_sidebar.html -->
 <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-start fixed-top mx-4">
        <a class="navbar-brand mt-3 " href="index.html" style="color:white">Alumni</a>
          <!-- <a class="sidebar-brand brand-logo" href="index.html"><img src="/admin/assets/images/logo.svg" alt="logo" /></a> -->
          <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="/admin/assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item nav-category">
            <span class="nav-link">Navigation</span>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{route('dashboard')}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#profile" aria-expanded="false" aria-controls="profile">
              <span class="menu-icon">
                <i class="mdi mdi-laptop"></i>
              </span>
              <span class="menu-title">Profile</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="profile">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('profile')}}">Create Profile</a></li>
                <li class="nav-item"> <a class="nav-link" href="/update_profile/{{Auth::user()->id}}">Update Profile</a></li>
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#review" aria-expanded="false" aria-controls="review">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Review</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="review">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="{{route('review')}}">Write a review</a></li>
                <!-- <li class="nav-item"> <a class="nav-link" href="">Your review</a></li> -->
              </ul>
            </div>
          </li>
          <li class="nav-item menu-items">
          <form action="{{route('logout')}}" method="post" >
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