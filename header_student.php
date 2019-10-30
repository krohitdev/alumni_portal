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
			<ul class="nav navbar-nav" style="font-size:20px;">
				<li class="active"><a href="allpost.php">Home</a></li>
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
				<?php
				if(isset($_SESSION['username']) && isset($_SESSION['password']))
				{
					echo "<li><a href=''>Hi ".$_SESSION['username']."</a></li>";
					echo "<li><a href='message.php' data-toggle='tooltip' title='Create Message!'><span class='fa fa-envelope'></a></li>";
					echo "<li><a href='viewmessage.php' data-toggle='tooltip' title='View Message!'><span class='fa fa-envelope-open -o'></a></li>";
					echo "<li><a href='logout.php'>Logout</a></li>";


				}
				else
				{
					echo  "<li><a href='#' class='dropdown-toggle' data-toggle='dropdown'>Signup<span class='caret'></span></a>

                <ul class='dropdown-menu'>
                    <li><a href='signup.php'><h4>Student </h4></a><li>
                    <li><a href='alumni_form.php'><h4>Alumni</h4></a><li>

                </ul>

            </li>

                <li><a href='login.php'>Login</a></li>";
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