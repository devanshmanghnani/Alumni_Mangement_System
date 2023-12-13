 <!-- css -->
 @include('layout.main')

  <body>
    <!-- header -->
    @include('layout.header')

    <div class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg'); background-attachment:fixed;">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center">
            <p class="breadcrumbs"><span class="mr-2"><a href="/">Home</a></span> <span>Event</span></p>
            <h1 class="mb-3 bread">Events</h1>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section">
    	<div class="container">
         
    		<div class="row">
          @if(count($events)>0)
          @foreach($events as $event)
            <div class="col-md-4 d-flex ftco-animate">
              <div class="blog-entry align-self-stretch">
                <a href="blog-single.html" class="block-20">
                <img src="uploads/events_image/{{$event->image}}" class="img-fluid" alt="Upcoming Event">
                </a>
                <div class="text p-4 d-block">
                  <div class="meta mb-3">
                    <div><a href="#">{{$event->date}}</a></div>
                    <div><a href="#">{{$event->organised_by}}</a></div>
                    <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                  </div>
                  <h3 class="heading mb-4"><a href="#">{{$event->name}}</a></h3>
                  <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i>{{$event->time}}</span> <span><i class="icon-map-o"></i>{{$event->location}}</span></p>
                  <p>{{$event->description}}</p>
                  <p><a href="event.html">Join Event <i class="ion-ios-arrow-forward"></i></a></p>
                </div>
              </div>
            </div>
            @endforeach
            @else
            <br><br><br>
            <div class="alert alert-danger" role="alert">
              No event scheduled at this time Check back later
            </div>
            @endif
        </div>  
      </div>
     
    </section>
       <div class="row m-5">
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
		
     <!-- footer -->
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

<!-- Mirrored from technext.github.io/genius/event.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Aug 2022 08:49:56 GMT -->
</html>