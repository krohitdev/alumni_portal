
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
							<div class="container"">
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
				
				<div class="container">
					<div class="navbar-header">
						<a href="index.php" class="navbar-brand" style="font-size:22px;">KCL Alumni</a>
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mybox">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>`
					</div>
						
					<div class="collapse navbar-collapse" id="mybox" >	
						<ul class="nav navbar-nav" style="font-size:20px;">
							<li class="active"><a href="view_profile">My Profile</a></li>
							<li class="dropdown"><a href="post.php">Timeline</a></li>
							
						</li>
							<li><a href="add_post.php">Add Post</a></li>
							<li><a href="#story" class="dropdown-toggle" data-toggle="dropdown">Alumni Story<span class="caret"></span></a>
							
							<ul class="dropdown-menu">
									<li><a href="alumni_directory.php">Our Allumni</a><li>
									<li><a href="alumni_story.php">Alumni Story</a><li>
									
							</ul>
							
							</li>
							
							<li><a href="contact.php">Contact</a></li>
						</ul>				
						<ul class="nav navbar-nav navbar-right" style="font-size:20px;">
							<?php
							if(isset($_SESSION['email']) && isset($_SESSION['password']))
							{
								echo "<li><a href='myaccount'>Welcome ".$_SESSION['username']."</a></li>";
								echo "<li></li>";
								echo "<li><a href='viewmessage.php' data-toggle='tooltip' title='View Message!'><span class='fa fa-envelope-open -o'></a></li>";
								echo "<li><a href='logout.php'>Logout</a></li>";
								
								
							}
							else
							{
									echo  "<li><a href='signup.php'>Sign Up</a></li>
							<li><a href='login.php'>Login</a></li>";
							}
							
							?>
						</ul>	
						<!-- /Right top navigation bar -->	
					</div> 
				</div>
			</nav>
		<!-- top navigation bar -->		 
			
		</div>
		
	<div class="footer-wrapper type2">
        <footer class="foooter-container">
            <div class="container">
                <div class="footer-middle">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 col-xs-12 animated footer-col fadeIn">
                            <div class="contact-footer">
                                <div class="logo-footer">
                                    <a href="./homepage-1.php"><img src="images/logo-footer.png" alt=""></a>
                                </div>
                                <div class="contact-desc">
                                    <p class="text-light">Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare.</p>
                                </div>
                                <div class="contact-phone-email">
                                    <span class="contact-phone"><a href="newindex.html">
									<span class="fa fa-phone"> </span> 0181 2655524</a></span>
                                    <span class="contact-email"><a href="mailto:alumni@kcl-imt.com"><span class="fa fa-envelope"></span> alumni@kcl-imt.com</a></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5 col-sm-12  col-xs-12 animated footer-col fadeIn">
                            <div class="links-footer">
                                <div class="row">
                                    <div class="col-sm-6 col-xs-12">
                                        <h6 class="heading-bold">DASHBOARD</h6>
                                        <ul class="list-unstyled no-margin">
                                            <li><a href="signup.php">REGISTER</a></li>
                                            
                                            <li><a href="alumni_story.php">STORY</a></li>
                                            <li><a href="alumni_directory.php">DIRECTORY</a></li>
                                        </ul>
                                    </div>
                                    
                                    <div class="col-sm-6 col-xs-12">
                                        <h6 class="heading-bold">ABOUT US</h6>
                                        <ul class="list-unstyled no-margin">
                                            <li><a href="event-single.php">EVENTS</a></li>
                                            <li><a href="gallery.php">GALLERY</a></li>
											 <li><a href="contact.php">CONTACT US</a></li>
											
                                        </ul>
                                    </div>
                                    
                                   
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12 animated footer-col fadeIn">
                            <div class="links-social">
                                <div class="login-dashboard">
                                    <a href="login.php" class="bg-color-theme text-center text-regular">Login Dashboard</a>
                                </div>
                                <ul class="list-inline text-center">
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                                    <li><a href="https://www.facebook.com/Kcl-Imt-259148417429520/?ref=br_rs"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-bottom text-center">
                    <p class="copyright text-light">©2017 Alumni Association of the KCL-IMT</p>
                </div>
            </div>
        </footer>
    </div>
	<!-- /footer -->
	<!-- js files -->
	</div>
	
	<!-- //js files -->
	</body>
	</html>
	
