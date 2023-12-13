<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="/admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="/admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="/admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="/admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="/admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="/admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="/admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="/admin/assets/images/favicon.png" />
    </head>
<body>

<div class="container-scroller">
     
    @include('admin.nav');
   <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.html"><img src="admin/assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name"></p>
                  </div>
                </a>
              </li>  
            </ul>  
          </div>  
        </nav>
        <!-- partial -->
        <div class="main-panel">
        <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div id="side-nav" style="height: auto !important;" class="col-lg-2">
                    <div id="side-nav-overlay">
                    </div>
                </div>
                <div class="col-lg-10 mx-5">

                    <!-- Tab panes -->
                    <div class="tab-content">
                        <div id="home" class="container tab-pane active"><br>
                            <h3>Profile</h3>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <div class="card-header">
                                                <h4>User Details</h4>
                                                <hr>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <label for="">First Name</label>
                                                        <div class="p-2 border">{{ $profiles->fname }}</div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="">Last Name</label>
                                                        <div class="p-2 border">{{ $profiles->lname }}</div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="">Date of birth</label>
                                                        <div class="p-2 border">{{ $profiles->dob }}</div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="">Address</label>
                                                        <div class="p-2 border">{{ $profiles->address }}</div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="">Contact</label>
                                                        <div class="p-2 border">{{ $profiles->contact }}</div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="">Profession</label>
                                                        <div class="p-2 border">{{ $profiles->profession }}</div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="">Company Name</label>
                                                        <div class="p-2 border">{{ $profiles->company_name }}</div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="">Designation</label>
                                                        <div class="p-2 border">{{ $profiles->designation }}</div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="">Experience</label>
                                                        <div class="p-2 border">{{ $profiles->experience }}</div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="">Year_joined</label>
                                                        <div class="p-2 border">{{ $profiles->Year_joined }}</div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="">Year_graduated</label>
                                                        <div class="p-2 border">{{ $profiles->Year_graduated }}</div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="">Gender</label>
                                                        <div class="p-2 border">{{ $profiles->gender }}</div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="">Course</label>
                                                        <div class="p-2 border">{{ $profiles->course }}</div>
                                                    </div>
                                                    <div class="col-md-4">
                                                        <label for="">Linkedin_id</label>
                                                        <div class="p-2 border">{{ $profiles->linkedin_id }}</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> 
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
        <!-- plugins:js -->
        <script src=" /admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="/admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="/admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="/admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="/admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="/admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="/admin/assets/js/off-canvas.js"></script>
    <script src="/admin/assets/js/hoverable-collapse.js"></script>
    <script src="/admin/assets/js/misc.js"></script>
    <script src="/admin/assets/js/settings.js"></script>
    <script src="/admin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src=" /admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
</body>
</html>






