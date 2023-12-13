<!-- css -->
@include('layout.main')
<link rel="stylesheet" href="css/extra.css">


<body style="background-image: url('images/bg_3.jpg'); background-attachment:fixed;">
    
<div class="container" id="container">
	<div class="form-container sign-up-container">
		<form action="{{ route('register.post') }}" method="POST">
@csrf
			@if(Session::has('success'))
			<div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
			
			@if(Session::has('fail'))
			<div class="alert alert-danger">{{Session::get('fail')}}</div>
            @endif

			<h2>Create Account</h2>
			<input type="text" placeholder="Username" name="name"  value="{{old('name')}}" required>
			<span class="text-danger"> @error('name') {{$message}} @enderror </span>
			<input type="email" placeholder="Email" name="email" value="{{old('email')}}" required>
			<span class="text-danger"> @error('email') {{$message}} @enderror </span>
			<input type="password" placeholder="Password" name="password" value="{{old('password')}}" required>
			<span class="text-danger"> @error('password') {{$message}} @enderror </span>
			<button class="my-1" type="submit" >Sign Up</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form action="{{ route('login.post') }}" method="post">
@csrf
			@if(Session::has('success'))
			<div class="alert alert-success">{{Session::get('success')}}</div>
            @endif
			
			@if(Session::has('fail'))
			<div class="alert alert-danger">{{Session::get('fail')}}</div>
            @endif

			<h2>Sign in</h2>
			<span>or use your account</span>
			<input type="email" placeholder="Email" name="email" value="{{old('email')}}"  >
			<span class="text-danger"> @error('email') {{$message}} @enderror </span>
			<input type="password" placeholder="Password" name="password" value="{{old('password')}}" >
			<span class="text-danger"> @error('password') {{$message}} @enderror </span>
			<button class="my-1">Sign In</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h2>Welcome Back!</h2>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</button>
			</div>
			<div class="overlay-panel overlay-right">
				<h2>Hello, Friend!</h2>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</button>
			</div>
		</div>
	</div>
</div>

<script src="js/extra.js"></script>
      
    </body>
  
  <!-- Mirrored from technext.github.io/genius/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 02 Aug 2022 08:49:56 GMT -->
  </html>