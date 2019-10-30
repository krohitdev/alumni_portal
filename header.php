<!DOCTYPE html>
<html>
<!-- <informatio  about user panel> -->
<head>
	<title>My Project</title>

	<style>
		.sign
		{
			width:100%;
			margin:auto;
		}
		img {
			width: 100%;
			margin: auto;
		}

	</style>

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/styles.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/register.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/post_page.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/add_post.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/lightbox.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/font-awesome/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/font-awesome/css/font-awesome.min.css">
	<script>
		function previewImage(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					$('#image')
							.attr('src', e.target.result)
				};
				reader.readAsDataURL(input.files[0]);
			}
		}
	</script>
	<script src="bootstrap/js/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script src="bootstrap/js/add_post.js"></script>
	<script src="bootstrap/js/lightbox.js"></script>

</head>

<body>

<!-- main wrapper -->
<div class="main-wrapper">
	<div class="container-fluid " >
		<!-- top navigation bar -->

		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="container-fluid" >
				<div class="row">
					<div class="col-md-12 hidden-md" style="background-color:#1a265c">
						<div class="container">
						<ul class="list-inline" style="padding:4px;">
							<li>
								<a href="mail-to:alumni@kcl-imt.com" style="color:white">
									<h4>
										<span class="fa fa-envelope"></span>
										<span class="text" style="color:white; "> alumni@kcl-imt.com</span>
									</h4>
								</a>
							</li>

							<li>
								<a href="" style="color:white;" >
									<h4>
										<i class="fa fa-phone" aria-hidden="true"></i>
										<span class="text" style="color:white;">(0181) 2655524</span>
									</h4>
								</a>
							</li>

						</ul>
					</div>
				</div>
			</div>
	</div>

	<div class="container">
		<div class="navbar-header " >
			<a href="index.php" class="navbar-brand" style="font-size:22px;">KCL Alumni</a>
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mybox">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>
	

		<div class="collapse navbar-collapse" id="mybox" height="100%" >
			<?php 
			// error_reporting(0)
			session_start();
			if($_SESSION==NULL)
			{
				?>
			<ul class="nav navbar-nav" style="font-size:20px;">
			

				<li class="active"><a href="index.php">Home</a></li>
				<li class="dropdown"><a href="about.php">About Us</a></li>
				<li><a href="gallery.php">Gallery</a></li>
				<li><a href="#story" class="dropdown-toggle" data-toggle="dropdown">Alumni Story<span class="caret"></span></a>

					<ul class="dropdown-menu">
						<li><a href="alumni_dir.php">Our Allumni</a><li>
						<li><a href="alumni_story.php">Alumni Story</a><li>

					</ul>

				</li>

				<li><a href="contact.php">Contact</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right" style="font-size:20px;">
				<li><a href='#' class='dropdown-toggle' data-toggle='dropdown'>Signup<span class='caret'></span></a>
	
                <ul class='dropdown-menu'>
                    <li><a href='signup.php'><h4>Student </h4></a><li>
                    <li><a href='alumni_form.php'><h4>Alumni</h4></a><li>

                </ul>

            </li>

                <li><a href='login.php'>Login</a></li>
			<?php }
			echo "</ul>";
			 
			
				
				if(isset($_SESSION['username']) && isset($_SESSION['password']))
				{
					if($_SESSION['u_type']=='student')
					{	
				?>
				
				<ul class="nav navbar-nav" style="font-size:20px;">
				<li class="active"><a href="student/welcome.php">My Profile</a></li>
				<li class="dropdown"><a href="student/post.php">Posts</a></li>
				<li><a href="#story" class="dropdown-toggle" data-toggle="dropdown">Message <span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="message.php">Inbox</a><li>
						<li><a href="viewmessage.php">Send Message</a><li>
					</ul>
				</li>

				<!--<li><a href="gallery.php">Gallery</a></li>-->
				<li><a href="#story" class="dropdown-toggle" data-toggle="dropdown">Our Alumni's <span class="caret"> </span></a>

					<ul class="dropdown-menu">
						<li><a href="alumni_dir.php">Allumni Directory</a><li>
						<li><a href="alumni_story.php">Alumni Story</a><li>

					</ul>

				</li>
			</ul>
			<ul class="nav navbar-nav navbar-right" style="font-size:20px;">
				
                
                    <li><a href='student/welcome.php'><?php echo "Hi ".$_SESSION['username'];?></a></li>
                   <li><a href='logout.php'>Logout</a></li>

                <?php 
					}
					if($_SESSION['u_type']=='alumni')
					{
				?>
						<ul class="nav navbar-nav" style="font-size:20px;">
							<li class="active"><a href="view_profile">My Profile</a></li>
							<li class="dropdown"><a href="post.php">Timeline</a></li>
							
						</li>
							<li><a href="add_post.php">Add Post</a></li>
							<li><a href="#story" class="dropdown-toggle" data-toggle="dropdown">Alumni <span class="caret"></span></a>
							
							<ul class="dropdown-menu">
									<li><a href="alumni_dir.php">Our Allumni</a><li>
									<li><a href="alumni_story.php">Alumni Story</a><li>
									
							</ul>
							
							</li>
							<li><a href="#" class="dropdown-toggle" data-toggle="dropdown">Message <span class="caret"></span></a>
							
							<ul class="dropdown-menu">
									<li><a href="message.php">Create Message</a><li>
									<li><a href="viewmessage.php">Inbox</a><li>
							</ul>
							</li>
						</ul>				
						<ul class="nav navbar-nav navbar-right" style="font-size:20px;">
							<li><a href='myaccount.php'>My Account</a></li>
							<li><a href='logout.php'>Logout</a></li>
						</ul>
					<?php
					}
				}
				?>
				</ul>		
			<!-- /Right top navigation bar -->
		</div>
	</div>
	</nav>
</div>
</div>
<!-- top navigation bar -->