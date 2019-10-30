
<?php
 ob_start();
 
if(isset($_SESSION))
{

//echo "<br><a href=logout.php>Logout</a>";
}
else
{
//header('location:newindex.php');
}

 ?>
<?php
include('header.php');
?>

		
	
		
		
 			<?php ob_start(); //if(isset($_SESSION)) { //echo "<br><a href=logout.php>Logout</a>"; } else { //header( 'location:newindex.php'); } ?>
<?php //include( 'header.php'); ?>





<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>

    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="images/slider1.jpg" class="img-responsive" alt="Chania" width="460" height="345">
        </div>

        <div class="item">
            <img src="images/slider2.jpg" class="img-responsive" alt="Chania" width="460" height="345">
        </div>

        <div class="item">
            <img src="images/slider4.jpg" class="img-responsive" alt="Flower" width="460" height="345">
        </div>
        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<!-- upcoming event-->

<div class="upcoming-event">
    <div class="container">
        <div class="row">
            <div class="area-img col-md-5 col-sm-12 col-xs-12">
                <img width="569" height="331" src="images/even-img.jpg" class="img-responsive animate zoomIn wp-post-image" alt="">
            </div>



            <div class="area-content col-md-7 col-sm-12 col-xs-12">
                <div class="area-top">
                    <div class="row">
                        <div class="col-sm-10 col-xs-8">
                            <?php include( 'oops_query.php'); $where=a rray( "id"=>"4" ); $result = $obj->select_record("event",$where); $row=mysqli_fetch_array($result); ?>
                            <h5 class="heading-light no-margin animated fadeInRight">UPCOMING EVENT</h5>
                            <h2 class="heading-bold animated fadeInLeft "><?php echo $row['event_name'];?></h2>
                            <span>
									<span class="fa fa-map-marker">
									</span>
                            <span class="text-place text-light animated fadeInRight"><?php echo $row['venue'];?></span>
                            </span>
                        </div>

                        <div class="col-sm-2 col-xs-3">
                            <div class="area-calendar calendar animated slideInRight">
                                <span class="day text-bold"><?php echo $row['date'];?></span>
                                <span class="month text-light"><?php echo $row['month'];?></span>
                                <span class="year text-light bg-year">2017</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="area-bottom">
                    <div id="time-event" class="pull-left animated slideInLeft timer">
                        <div class="timer-head-block">
                        </div>

                        <div class="timer-body-block">
                            <p style="font-size: 1.5em;">The countdown is finished!</p>
                        </div>

                        <!--<div class="timer-foot-block" >
								
							</div>
							
							<button class="btn btn-md btn-success "">Join Now</button>-->
                    </div>
                </div>

            </div>


        </div>
    </div>

</div>
<!--begin upcoming event-->

<!--Alumni Dashboard-->
<div class="container">
    <div class="alumni-dashboard">
        <div class="container">
            <div class="title title-dashboard type1">
                <h3 class="heading-light no-margin"> My KCL-IMT Alumni Dashboard </h3>
            </div>

            <div class="area-content">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                        <div class="fa fa-envelope fa-lg "></div>
                        <div class="box-content">
                            <h4 class="heading-regular"> Checking Message </h4>
                            <p class="text-content text-margin text-light ">
                                Check Your message and reply.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                        <div class="fa fa-user fa-lg "></div>
                        <div class="box-content">
                            <h4 class="heading-regular"> <a href="update_profile.php" style="color:black">Update My Information </a></h4>
                            <p class="text-content text-margin text-light">
                                Update your profile information and make changes.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                        <div class="fa fa-users fa-lg "></div>
                        <div class="box-content">
                            <h4 class="heading-regular"> <a href="signup.php" style="color:black">Join with Alumni Forum </a></h4>
                            <p class="text-content text-margin text-light">
                                Sign up and become alumni
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                        <div class="fa fa-search fa-lg "></div>
                        <div class="box-content">
                            <h4 class="heading-regular"><a href="alumni_directory.php" style="color:black"> Search Alumni Directory </a></h4>
                            <p class="text-content text-margin text-light">
                                Search alumni student in alumni directory.
                            </p>
                        </div>
                    </div>
                    <?php if($_SESSION==NULL) { ?>
                    <div class="login-dashboard text-center col-sm-12 col-xs-12">
                        <a href="login.php" class="bnt bnt-theme login-links">LOG IN TO ALUMNI DASHBOARD</a>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Alumni Dashboard-->


<!-- Alumni Interview-->
<div class="alumni-interview">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 col-xs-12 pull-right">
                <div class="interview-wrapper">
                    <div class="interview-title">
                        <h4 class="heading-light text-capitalize text-center">Alumni Interview</h4>
                        <h1 class="heading-light text-capitalize text-center">Hannah Jordan</h1>
                    </div>
                    <div class="interview-desc text-center">
                        <p class="text-light ">KCL-IMT provides me the best place to groom myself academically. I heartily thank the excellent faculty of this institute for brightening out best in me” – Dolly Verma (MCA) “Being a student of KCL-IMT has been a truly stimulating.</p>
                    </div>
                    <div class="interview-see-story">
                        <a href="./story-single.php" class="see-story bnt text-uppercase">SEE HER STORY</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Alumni Interview-->

<!-- Twitter System-->
<div class="twitter-stream">
    <div class="container">
        <div class="twitter-wrapper text-center">
            <div class="twitter-icon color-theme">
                <i class="fa fa-twitter" aria-hidden="true"></i>
            </div>
            <div class="twitter-content">
                <div class="twitter-desc">
                    <p class="text-light text-center">“I feel fortunate to be joining my classmates in welcoming the Class of 2016 to the KCL alumni community <a href="#">@KCL-IMT</a>
                    </p>
                    <div class="twitter-user">
                        <span class="avatar-user"><img src="images/avatar.png" alt=""></span>
                        <span class="name">@abc</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Twitter System-->

<!-- news letter -->
<div class="newsletter newsletter-parallax">
    <div class="container">
        <div class="newsletter-wrapper text-center">
            <div class="newsletter-title">
                <h2 class="heading-light">Keep Up and Join Our Newsletter</h2>
                <p class="text-white">Duis autem vel eum iriure dolor in hendrerit in vulputate.</p>
            </div>
            <form name="subscribe-form" target="_blank" class="form-inline">
                <input type="text" class="form-control text-center form-text-light" name="EMAIL" value="" placeholder="E-mail Address">
                <button type="submit" class="button bnt-theme">subscribe</button>
            </form>
        </div>
    </div>
</div>
<!-- /news letter -->

<!-- footer -->
<?php require( 'footer.php'); ?>
<!-- /footer -->

</div>
<!-- /main wrapper -->
</body>


</html>	<!-- upcoming event-->		
	
	<div class="upcoming-event">
		<div class="container">
			<div class="row">
				<div class="area-img col-md-5 col-sm-12 col-xs-12">
					<img width="569" height="331" src="images/even-img.jpg" class="img-responsive animate zoomIn wp-post-image" alt="">            
				</div>
			
		
		
				<div class="area-content col-md-7 col-sm-12 col-xs-12"> 
					<div class="area-top">
						<div class="row">
							<div class="col-sm-10 col-xs-8">
							<?php
						include('oops_query.php');

	 $where = array(
		"id"=>"4"
		);
		$result = $obj->select_record("event",$where);
		$row=mysqli_fetch_array($result);

	 ?>
								<h5 class="heading-light no-margin animated fadeInRight">UPCOMING EVENT</h5>
								<h2 class="heading-bold animated fadeInLeft "><?php echo $row['event_name'];?></h2>
								<span>
									<span class="fa fa-map-marker">
									</span>
									<span class="text-place text-light animated fadeInRight"><?php echo $row['venue'];?></span>
								</span>
							</div>
							
							<div class="col-sm-2 col-xs-3">		
								<div class="area-calendar calendar animated slideInRight">
													<span class="day text-bold"><?php echo $row['date'];?></span>
													<span class="month text-light"><?php echo $row['month'];?></span>
													<span class="year text-light bg-year">2017</span>
								</div>	
							</div>
						</div>
					</div>
					
					<div class="area-bottom">
						<div id="time-event" class="pull-left animated slideInLeft timer">
							<div class="timer-head-block">
							</div>
							
							<div class="timer-body-block">
								<p style="font-size: 1.5em;">The countdown is finished!</p>
							</div>
							
							<!--<div class="timer-foot-block" >
								
							</div>
							
							<button class="btn btn-md btn-success "">Join Now</button>-->
						</div>
					</div>
					
				</div>
		
					
			</div>		
		</div>
		
	</div>
	<!--begin upcoming event-->
	
	<!--Alumni Dashboard-->
	<div class="container">
		<div class="alumni-dashboard">
			<div class="container">
				<div class="title title-dashboard type1">
                    <h3 class="heading-light no-margin"> My KCL-IMT Alumni Dashboard </h3>
                </div>
				
				<div class="area-content">
                    <div class="row">
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                            <div class="fa fa-envelope fa-lg "></div>
                            <div class="box-content">
                                <h4 class="heading-regular"> Checking Message </h4>
                                <p class="text-content text-margin text-light ">
                                     Check Your message and reply.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                            <div class="fa fa-user fa-lg "></div>
                            <div class="box-content">
                                <h4 class="heading-regular"> <a href="update_profile.php" style="color:black">Update My Information </a></h4>
                                <p class="text-content text-margin text-light">
                                     Update your profile information and make changes.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                            <div class="fa fa-users fa-lg "></div>
                            <div class="box-content">	
                                <h4 class="heading-regular"> <a href="signup.php" style="color:black">Join with Alumni Forum </a></h4>
                                <p class="text-content text-margin text-light">
                                   Sign up and become alumni 
                                </p>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6 col-xs-12 text-center">
                            <div class="fa fa-search fa-lg "></div>
                            <div class="box-content">
                                <h4 class="heading-regular" ><a href="alumni_directory.php" style="color:black"> Search Alumni Directory </a></h4>
                                <p class="text-content text-margin text-light">
								 Search alumni student in alumni directory.
                                </p>
                            </div>
                        </div>
						<?php
						if($_SESSION==NULL)
						{
							?>
                        <div class="login-dashboard text-center col-sm-12 col-xs-12">
                            <a href="login.php" class="bnt bnt-theme login-links">LOG IN TO ALUMNI DASHBOARD</a>
                        </div>
						<?php
						}
						?>
                    </div>
                </div>
			</div>
		</div>
	</div>
	<!-- /Alumni Dashboard-->
	
	<!-- Block Links-->
	<!--<div class="block-links">
            <div class="container">
                <div class="row">
                    <div class="block-news col-md-4 col-sm-12 col-xs-12">
                        <div class="column-news">
                            <div class="title-links">
                                <h3 class="heading-regular">Latest News</h3>
                            </div>
                            <div class="post-wrapper">
                                <div class="post-item clearfix ">
                                    <div class="image-frame post-photo-wrapper">
                                        <a href="#"> <img src="images/new-img1.jpg" alt=""></a>
                                    </div>
                                    <div class="post-desc-wrapper">
                                        <div class="post-desc">
                                            <div class="post-title"><h6 class="heading-regular"><a href="#">New Sayidan "Start-Up" in Distrupt 2016</a></h6></div>
                                            <div class="post-excerpt">
                                                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-item clearfix ">
                                    <div class="image-frame post-photo-wrapper">
                                        <a href="#"> <img src="images/new-img2.jpg" alt="" data-pin-nopin="true"></a>
                                    </div>
                                    <div class="post-desc-wrapper">
                                        <div class="post-desc">
                                            <div class="post-title"><h6 class="heading-regular"><a href="#">Sayidan Library Gives Alumni New Access</a></h6></div>
                                            <div class="post-excerpt">
                                                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-item clearfix ">
                                    <div class="image-frame post-photo-wrapper">
                                        <a href="#"> <img src="images/new-img3.jpg" alt=""></a>
                                    </div>
                                    <div class="post-desc-wrapper">
                                        <div class="post-desc">
                                            <div class="post-title"><h6 class="heading-regular"><a href="#">Alumni Service Spotlight: Larry Traimor AB '82</a></h6></div>
                                            <div class="post-excerpt">
                                                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="post-item clearfix ">
                                <div class="image-frame post-photo-wrapper">
                                    <a href="#"> <img src="images/new-img4.jpg" alt=""></a>
                                </div>
                                <div class="post-desc-wrapper">
                                    <div class="post-desc">
                                        <div class="post-title"><h6 class="heading-regular"><a href="#">Sayidan in Silicon Valley: Family and Finance</a></h6></div>
                                        <div class="post-excerpt">
                                            <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                            <div class="view-all"><a href="./blog.php">View All News</a></div>
                        </div>
                    </div>
                    <div class="block-career col-md-4 col-sm-12 col-xs-12">
                        <div class="column-career">
                            <div class="title-links">
                                <h3 class="heading-regular">Career Opportunity</h3>
                            </div>
                            <div class="career-content">
                                <div class="company-item clearfix">
                                    <div class="company-logo">
                                        <img src="images/company-logo1.png" alt="" data-pin-nopin="true">
                                    </div>
                                    <div class="company-desc-wrapper">
                                        <div class="company-desc">
                                            <div class="company-title"><h6 class="heading-regular"><a href="#">Creative Director at StartTrek Inc</a></h6></div>
                                            <div class="company-excerpt">
                                                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="company-item clearfix">
                                    <div class="company-logo">
                                        <img src="images/company-logo2.png" alt="" data-pin-nopin="true">
                                    </div>
                                    <div class="company-desc-wrapper">
                                        <div class="company-desc">
                                            <div class="company-title"><h6 class="heading-regular"><a href="#">Chief Technologies Officer at Microtek Inc</a></h6></div>
                                            <div class="company-excerpt">
                                                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="company-item clearfix">
                                    <div class="company-logo">
                                        <img src="images/company-logo3.png" alt="">
                                    </div>
                                    <div class="company-desc-wrapper">
                                        <div class="company-desc">
                                            <div class="company-title"><h6 class="heading-regular"><a href="#">Senior UI/UX Manager at Kidos Inc</a></h6></div>
                                            <div class="company-excerpt">
                                                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="company-item clearfix">
                                    <div class="company-logo">
                                        <img src="images/company-logo4.png" alt="">
                                    </div>
                                    <div class="company-desc-wrapper">
                                        <div class="company-desc">
                                            <div class="company-title"><h6 class="heading-regular"><a href="#">Finance Officer at  Atomic Inc</a></h6></div>
                                            <div class="company-excerpt">
                                                <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="view-all"><a href="./career-opportunity.php">View All Career Opportunity</a></div>
                        </div>

                    </div>
                    <div class="block-event-calendar col-md-4 col-sm-12 col-xs-12">
                        <div class="column-calendar">
                            <div class="title-links">
                                <h3 class="heading-regular">Event Calendar</h3>
                            </div>
                            <div class="content-calendar bg-calendar no-padding">
                                <div class="top-section">
                                    <h6 class="heading-light">April 2016</h6>
                                    <span class="icon calendar-icon pull-right"></span>
                                </div>
                                <div class="list-view">
                                    <div class="view-item">
                                        <div class="date-item">
                                            <span class="dates text-light">SAT</span>
                                            <span class="day text-bold color-theme">07</span>
                                            <span class="month text-light">APR</span>
                                        </div>
                                        <div class="date-desc-wrapper">
                                            <div class="date-desc">
                                                <div class="date-title"><h6 class="heading-regular">Club Sponsorship 2015-2016</h6></div>
                                                <div class="date-excerpt">
                                                    <p>Organizer: Sayidan Black Alumni Association</p>
                                                </div>
                                                <div class="place">
                                                    <span class="icon map-icon"></span>
                                                    <span class="text-place">Gondomanan Street 209, California</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="view-item">
                                        <div class="date-item">
                                            <span class="dates text-light">MON</span>
                                            <span class="day text-bold color-theme">09</span>
                                            <span class="month text-light">APR</span>
                                        </div>
                                        <div class="date-desc-wrapper">
                                            <div class="date-desc">
                                                <div class="date-title"><h6 class="heading-regular">Weekend at Sayidan Sierra Camp</h6></div>
                                                <div class="date-excerpt">
                                                    <p>Organizer: Sayidan Black Alumni Association</p>
                                                </div>
                                                <div class="place">
                                                    <span class="icon map-icon"></span>
                                                    <span class="text-place">Gondomanan Street 209, California</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="view-item">
                                        <div class="date-item">
                                            <span class="dates text-light">TUE</span>
                                            <span class="day text-bold color-theme">10</span>
                                            <span class="month text-light">APR</span>
                                        </div>
                                        <div class="date-desc-wrapper">
                                            <div class="date-desc">
                                                <div class="date-title"><h6 class="heading-regular">Gondomanan Street 209, California</h6></div>
                                                <div class="date-excerpt">
                                                    <p>Organizer: Sayidan Black Alumni Association</p>
                                                </div>
                                                <div class="place">
                                                    <span class="icon map-icon"></span>
                                                    <span class="text-place">Gondomanan Street 209, California</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="view-item">
                                        <div class="date-item">
                                            <span class="dates text-light">THU</span>
                                            <span class="day text-bold color-theme">12</span>
                                            <span class="month text-light">APR</span>
                                        </div>
                                        <div class="date-desc-wrapper">
                                            <div class="date-desc">
                                                <div class="date-title"><h6 class="heading-regular">Annual Meeting and Luncheon</h6></div>
                                                <div class="date-excerpt">
                                                    <p>Organizer: Sayidan Black Alumni Association</p>
                                                </div>
                                                <div class="place">
                                                    <span class="icon map-icon"></span>
                                                    <span class="text-place">Gondomanan Street 209, California</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="view-item">
                                        <div class="date-item">
                                            <span class="dates text-light">SAT</span>
                                            <span class="day text-bold color-theme">14</span>
                                            <span class="month text-light">APR</span>
                                        </div>
                                        <div class="date-desc-wrapper">
                                            <div class="date-desc">
                                                <div class="date-title"><h6 class="heading-regular">Food Sort at Second Food Bank</h6></div>
                                                <div class="date-excerpt">
                                                    <p>Organizer: Sayidan Black Alumni Association</p>
                                                </div>
                                                <div class="place">
                                                    <span class="icon map-icon"></span>
                                                    <span class="text-place">Gondomanan Street 209, California</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="view-all"><a href="./programs-events.php">View All Events</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	-->
	<!-- /Block Links-->
	
	<!-- Alumni Interview-->
		<div class="alumni-interview">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-12 col-xs-12 pull-right">
                        <div class="interview-wrapper">
                            <div class="interview-title">
                                <h4 class="heading-light text-capitalize text-center">Alumni Interview</h4>
                                <h1 class="heading-light text-capitalize text-center">Hannah Jordan</h1>
                            </div>
                            <div class="interview-desc text-center">
                                <p class="text-light ">KCL-IMT provides me the best place to groom myself academically. I heartily thank the excellent faculty of this institute for brightening out best in me” – Dolly Verma (MCA) “Being a student of KCL-IMT has been a truly stimulating.</p>
                            </div>
                            <div class="interview-see-story">
                                <a href="./story-single.php" class="see-story bnt text-uppercase">SEE HER STORY</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	<!-- /Alumni Interview-->
	
	<!-- Twitter System-->
		<div class="twitter-stream">
            <div class="container">
                <div class="twitter-wrapper text-center">
                    <div class="twitter-icon color-theme">
                        <i class="fa fa-twitter" aria-hidden="true"></i>
                    </div>
                    <div class="twitter-content">
                        <div class="twitter-desc">
                            <p class="text-light text-center">“I feel fortunate to be joining my classmates in welcoming the Class of
                                2016 to the KCL alumni community <a href="#">@KCL-IMT</a></p>
                            <div class="twitter-user">
                                <span class="avatar-user"><img src="images/avatar.png" alt=""></span>
                                <span class="name">@abc</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	<!-- /Twitter System-->
	
	<!-- news letter -->
		<div class="newsletter newsletter-parallax">
           <div class="container">
               <div class="newsletter-wrapper text-center">
                   <div class="newsletter-title">
                       <h2 class="heading-light">Keep Up and Join Our Newsletter</h2>
                       <p class="text-white">Duis autem vel eum iriure dolor in hendrerit in vulputate.</p>
                   </div>
                   <form name="subscribe-form" target="_blank" class="form-inline">
                       <input type="text" class="form-control text-center form-text-light" name="EMAIL" value="" placeholder="E-mail Address">
                       <button type="submit" class="button bnt-theme">subscribe</button>
                   </form>
               </div>
           </div>
        </div>
	<!-- /news letter -->
	
	<!-- footer -->
	<?php 
		require('footer.php');
	?>
	<!-- /footer -->
	
	</div>
	<!-- /main wrapper -->
	</body>
	
	
</html>