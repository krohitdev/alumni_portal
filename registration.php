

<html>
	<!-- <informatio  about user panel> -->
	<head>
		<title>My Project</title>
			
		<style>
			
		img {
			width: 100%;
			margin: auto;
		}
		  
		</style>
		<script src="bootstrap/js/jquery.js"></script>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/styles.css">
		<script src="bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="bootstrap/font-awesome/css/font-awesome.css">
		<link rel="stylesheet" type="text/css" href="bootstrap/font-awesome/css/font-awesome.min.css">
		
		
	</head>
	
	<body>
	
	<!-- main wrapper -->
	<div class="main-wrapper">
		<div class="container-fluid " >
		
		<!-- top navigation bar -->
		
			<nav class="navbar navbar-default navbar-fixed-top">	
				<div class="container-fluid" >
					<div class="row">
						<div class="top-left col-sm-12 hidden-xs" style="background-color:#1a265c">
							<div class="container" >
								<ul class="list-inline">
									<li>
										<a href="#">
											<h3>
												<span class="glyphicon glyphicon-envelope"></span>
												<span class="text" style="color:white;"><a href="hewindex"> alumni@kcl-imt</a></span>
											</h3>
										</a>
									</li>
									
									<li>
										<a href="#">
											<h3>
												<span class="glyphicon glyphicon-phone"></span>
												<span class="text" style="color:white;">(0181) 2655524</span>
											</h3>
										</a>
									</li>		
								</ul>
						</div>
					</div>
				</div>		
			</div>
				
				<div class="container">
					<div class="navbar-header">
						<a href="#" class="navbar-brand">KCLAlumni</a>
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mybox">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>`
					</div>
						
					<div class="collapse navbar-collapse" id="mybox">	
						<ul class="nav navbar-nav">
							<li class="active"><a href="#">Home</a></li>
							<li><a href="about.html">About Us </a></li>
							<li><a href="#programs">Program & Events</a></li>
							<li><a href="#story">Alumni Story</a></li>
							
							<li><a href="#contact">Contact</a></li>
						</ul>
						
						<!-- Right top navigation bar -->
						<ul class="nav navbar-nav navbar-right">
							<li><a href="#">Login</a></li>
							<li><a href="signup.html">Sign Up</a></li>
						</ul>				
						
						<!-- /Right top navigation bar -->	
					</div> 
				</div>
			</nav>
		<!-- top navigation bar -->		 
			
		</div>
		<br><br><br>
		<!-- Page Header -->
			<div class="container">
					<div class="page-header">
						<br>
						<h1>Register Here</h1>
						<form method="post" name="form" action="insert.php"><br><br>
							<div class="form-group">
						<fieldset>
						<label for="un">Username</label>
						<input type="text" id="un" name="un" class="form-control" value="" placeholder="Enter password" required  ><br>
						
						<label for="ps">Password</label>						
						<input type="password" id="ps" class="form-control" name="password"  placeholder="Enter password" required maxlength="3" pattern="[a-z]{2}[0-9]{1}" title="dnt use special character"><br>
						
						<label for="email">E-mail ID</label>						
						<input type="email" id="email" class="form-control" name="email"  placeholder="Enter password" required ><br>
						
						
						<label for="dob">DoB</label>
						<input type="date" id="dob" class="form-control" name="dob"><br>
						
						<label for="address">Address</label>
						<textarea id="address" class="form-control" name="address"  placeholder="Enter Address" required  ></textarea ><br>
						
						<label for="city">City</label>
						<input type="city" id="city" class="form-control" name="city"  placeholder="Select City "required  ><br>
						
						<label for="class">CLass</label><br>
						<input type="radio" name="class" value="BCA"  class="form-inline" >BCA
						<input type="radio" name="class" value="MCA"  class="form-inline" checked  > MCA
						
							
						<br>
						<label for="session">Session</label><br>
						<input type="text" id="session" class="form-control" name="session"  placeholder="Enter Session" required  ><br>
						
						<button  class="btn btn-success" name="submit">Submit</button>
						
				
				
				</form>	
			</fieldset>
		</form>
								
								
								
								
								
								
							</div>
						
						</form>
					</div>
				
				
				<!-- /Page Header -->
			</div>
		
	</div>	
	</body>
	
	
</html>