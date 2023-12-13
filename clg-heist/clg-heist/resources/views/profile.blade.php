<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>profile</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/montserrat-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/material-design-iconic-font/material-design-iconic-font.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/profile.css"/>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/36a236c794.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/5ec862f73b.js" crossorigin="anonymous"></script>

</head>
<body class="form-v10">
	@if (session('status'))
		<h6 class="alert alert-success">{{session('status')}}</h6>
	@endif	
	<div class="page-content">
		<div class="form-v10-content">
			<form class="form-detail" action="" method="post" enctype="multipart/form-data">
				@csrf
				<div class="form-left">
					<h2>General Infomation</h2>
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="fname"  class="input-text" placeholder="First Name" required>
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="lname" class="input-text" placeholder="Last Name" required>
						</div>
					</div>
					<div class="form-group">
						<div class="form-row form-row-1">
							<input type="date" name="dob"  class="input-text" placeholder="Date of birth" required>
						</div>
                        <div class="form-row form-row-2">
							<input type="number" name="contact" class="input-text" placeholder="Contact" required>
						</div>	
					</div>

                    <div class="form-row">
						<input type="text" name="address" class="additional" placeholder="Address" required>
					</div>

                    <div class="form-group">
						<div class="form-row form-row-1">
							<input type="number" name="Year_joined"  class="input-text" placeholder="Year Joined" required>
						</div>
                        <div class="form-row form-row-2">
							<input type="number" name="Year_graduated" class="input-text" placeholder="Year Graduated" requear ired>
						</div>	
					</div>
                    <div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="gender"  class="input-text" placeholder="Gender" required>
						</div>
                        <div class="form-row form-row-2">
							<input type="text" name="course" class="input-text" placeholder="Course" required>
						</div>	
					</div>

                    <div class="form-row">
                    <label>Upload Your Photo</label>
                    <input type="file" name="profile_image" class="input-text"/>
                    </div>
				</div>
				<div class="form-right">
					<h2>Company Details</h2>
                    <div class="form-group">
						<div class="form-row form-row-1">
							<input type="text" name="profession"  class="input-text" placeholder="Profession" required>
						</div>
						<div class="form-row form-row-2">
							<input type="text" name="company_name" class="input-text" placeholder="Company" required>
						</div>
					</div>
                    <div class="form-group">
					<div class="form-row form-row-1">
						<input type="text" name="designation" class="company" placeholder="Designation" required>
					</div>
                        <div class="form-row form-row-2">
							<input type="text" name="linkedin_id" class="input-text" placeholder="Linkedin id" required>
						</div>
					</div>
                    <div class="form-row">
						<input type="text" name="experience" class="additional" placeholder="Experience" required>
					</div>
					<div class="form-row-last">
						<input type="submit" class="register" value="Submit">
					</div>
				</div>
			</form>
		</div>
	</div>
</body>
</html>