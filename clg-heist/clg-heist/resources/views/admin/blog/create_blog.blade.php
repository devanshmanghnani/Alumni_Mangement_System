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
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
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
     
     @include('admin.nav');

   <div class="container-fluid page-body-wrapper">
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
                <h4 style="color: white" class="text-center">Blog</h4>
                <hr>
                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="tab"
                            href="#home">Create a Blog</a>
                    </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div id="home" class="container tab-pane active"><br>
                        <h3>Create a Blog here</h3>
                        <div class="row">
                            <div class="col-lg-8 col-lg-offset-2">
                            <form enctype="multipart/form-data" method="post" action="{{route('create_blog')}}">
                            @csrf
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input name="title" class="form-control" type="text">
                    </div>
                    <div class="form-group">
                        <label for="date">Blog Date</label>
                        <input name="date" data-toggle="datepicker" class="form-control"
                        type="date">
                    </div>
                    <div class="form-group">
                        <label for="written_by">Writer</label>
                        <input name="written_by" data-toggle="datepicker" class="form-control"
                        type="text">
                    </div>
                    <!-- {{csrf_field()}} -->
                    <h6>Description</h6>
                    <div class="form-group">
                        <textarea class="textarea" name="description" id="article-ckeditor" cols="70" rows="5">

                        </textarea>
                    </div>
                    <div class="input-group mb-3">

                        <div class="custom-file">
                            <input name="image" type="file" id="inputGroupFile01"
                                aria-describedby="inputGroupFileAddon01">
                        </div>
                    </div>
                    <button type="submit" style="height: 35px;width: 250px" class="btn btn-light">Submit</button>
                    <br><br>
                </form>
                                
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
        <script src=" admin/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="admin/assets/vendors/chart.js/Chart.min.js"></script>
    <script src="admin/assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="admin/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="admin/assets/js/off-canvas.js"></script>
    <script src="admin/assets/js/hoverable-collapse.js"></script>
    <script src="admin/assets/js/misc.js"></script>
    <script src="admin/assets/js/settings.js"></script>
    <script src="admin/assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src=" admin/assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
</body>
</html>