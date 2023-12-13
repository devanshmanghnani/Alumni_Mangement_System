<!--css-->
@include('layout.main')
  <body>
    
  <!-- header-->
  @include('layout.header')
    
    <div class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg'); background-attachment:fixed;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home</a></span> <span>Course</span></p>
            <h1 class="mb-3 bread">Courses</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-4 d-flex ftco-animate">
    				<div class="course align-self-stretch">
    					<a href="#" class="img" style="background-image: url(images/course-1.jpg)"></a>
    					<div class="text p-4">
    						<p class="category"><span>English</span> <span class="price">$250</span></p>
    						<h3 class="mb-3"><a href="#">English for Tommorow</a></h3>
    						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
    						<p><a href="#" class="btn btn-primary">Enroll now!</a></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4 d-flex ftco-animate">
    				<div class="course align-self-stretch">
    					<a href="#" class="img" style="background-image: url(images/course-2.jpg)"></a>
    					<div class="text p-4">
    						<p class="category"><span>Science</span> <span class="price">$250</span></p>
    						<h3 class="mb-3"><a href="#">Computer Engineering</a></h3>
    						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
    						<p><a href="#" class="btn btn-primary">Enroll now!</a></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4 d-flex ftco-animate">
    				<div class="course align-self-stretch">
    					<a href="#" class="img" style="background-image: url(images/course-3.jpg)"></a>
    					<div class="text p-4">
    						<p class="category"><span>Business</span> <span class="price">$250</span></p>
    						<h3 class="mb-3"><a href="#">Business Studies</a></h3>
    						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
    						<p><a href="#" class="btn btn-primary">Enroll now!</a></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4 d-flex ftco-animate">
    				<div class="course align-self-stretch">
    					<a href="#" class="img" style="background-image: url(images/course-4.jpg)"></a>
    					<div class="text p-4">
    						<p class="category"><span>English</span> <span class="price">$250</span></p>
    						<h3 class="mb-3"><a href="#">English for Tommorow</a></h3>
    						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
    						<p><a href="#" class="btn btn-primary">Enroll now!</a></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4 d-flex ftco-animate">
    				<div class="course align-self-stretch">
    					<a href="#" class="img" style="background-image: url(images/course-5.jpg)"></a>
    					<div class="text p-4">
    						<p class="category"><span>Science</span> <span class="price">$250</span></p>
    						<h3 class="mb-3"><a href="#">Computer Engineering</a></h3>
    						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
    						<p><a href="#" class="btn btn-primary">Enroll now!</a></p>
    					</div>
    				</div>
    			</div>
    			<div class="col-md-4 d-flex ftco-animate">
    				<div class="course align-self-stretch">
    					<a href="#" class="img" style="background-image: url(images/course-6.jpg)"></a>
    					<div class="text p-4">
    						<p class="category"><span>Business</span> <span class="price">$250</span></p>
    						<h3 class="mb-3"><a href="#">Business Studies</a></h3>
    						<p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name</p>
    						<p><a href="#" class="btn btn-primary">Enroll now!</a></p>
    					</div>
    				</div>
    			</div>
    		</div>
    		<div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
    	</div>
    </section>
		
		<section class="ftco-section-parallax">
      <div class="parallax-img d-flex align-items-center">
        <div class="container">
          <div class="row d-flex justify-content-center">
            <div class="col-md-7 text-center heading-section heading-section-white ftco-animate">
              <h2>Subcribe to our Newsletter</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in</p>
              <div class="row d-flex justify-content-center mt-5">
                <div class="col-md-8">
                  <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                      <input type="text" class="form-control" placeholder="Enter email address">
                      <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- footer-->
  @include('layout.footer')
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>

<!-- Mirrored from technext.github.io/genius/course.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Aug 2022 08:49:49 GMT -->
</html>