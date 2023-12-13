<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Corona Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="admin/assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="admin/assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="admin/assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="admin/assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="admin/assets/images/favicon.png" />
  </head>
<body>
<div class="container-scroller">
     
     @include('alumni.nav');

   <div class="container-fluid page-body-wrapper">
 <!-- partial:partials/_navbar.html -->
      <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini"><img src="admin/assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <ul class="navbar-nav navbar-nav-right">
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">{{ Auth::user()->name }}</p>
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
            @if(Session::has('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
            
            @if(Session::has('fail'))
            <div class="alert alert-danger">{{Session::get('fail')}}</div>
            @endif
            <div class="col-lg-10 mx-5">
                <h4 style="color: white" class="text-center">Alumni Profile</h4>
                <hr>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab"
                            href="#home">Profile</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div id="home" class="container tab-pane active"><br>
                        <!-- <h3>Create an event here</h3> -->
						<form enctype="multipart/form-data" action="{{route('profile')}}" method="post" >   
                        	<div class="row  justify-content-center">                             
                                @csrf
								<div class="col-lg-6 col-lg-offset-2">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input name="fname" class="form-control" type="text"  >
                                    </div>
                                    <div class="form-group">
                                        <label>Last Name </label>
                                        <input name="lname" class="form-control" type="text" >
                                    </div>
                                    <div class="form-group">
                                        <label>DOB </label>
                                        <input name="dob" class="form-control" type="date" >
                                    </div>

                                    <div class="form-group">
                                        <label>Contact</label>
                                        <input name="contact" data-toggle="datepicker" class="form-control" type="number" >

                                    </div>
                                    <div class="form-group">
                                        <label>Address</label>
                                        <input name="address"  class="form-control"
                                            type="text" >
                                    </div>
									<div class="form-group">
                                        <label>Year Joined</label>
                                        <input name="Year_joined"  class="form-control"
                                            type="number" >
                                    </div>
									<div class="form-group">
                                        <label>Year Graduated</label>
                                        <input name="Year_graduated"  class="form-control"
                                            type="number" >
                                    </div>
									<div class="form-group">
                                        <label>Gender</label>
                                        <input name="gender"  class="form-control"
                                            type="text" >
                                    </div>
								</div>	
								<div class="col-lg-6 col-lg-offset-2">
									
									<div class="form-group">
                                        <label>Course</label>
                                        <input name="course"  class="form-control"
                                            type="text" >
                                    </div>
									<div class="form-group">
                                        <label>Photo</label>
                                        <input name="profile_image"  class="form-control"
                                            type="file" >								
                                    </div>
									<div class="form-group">
                                        <label>Profession</label>
                                        <input name="profession"  class="form-control"
                                            type="text" >
                                    </div>
									<div class="form-group">
                                        <label>Company</label>
                                        <input name="company_name"  class="form-control"
                                            type="text" >
                                    </div>
									<div class="form-group">
                                        <label>Designation</label>
                                        <input name="designation"  class="form-control"
                                            type="text" >
                                    </div>
									<div class="form-group">
                                        <label>LinkedIn ID</label>
                                        <input name="linkedin_id"  class="form-control"
                                            type="text" >
                                    </div>
                                    <div class="form-group">
                                        <label>Nostalgia</label>
                                        <textarea class="form-control" name="experience"  cols="35"
                                            rows="6">
                                        </textarea>
                                    </div>
								</div>		
								<button type="submit" style="height: 35px;width: 500px;"
                                        class="btn btn-light mt-2">Submit</button>
                                    <br><br>
                            </div>
						</form>	
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
    <!-- <div class="container"-->
</body>
</html>