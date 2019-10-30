
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
                <li class="active"><a href="index.php">Home</a></li>
                <li class="dropdown"><a href="about.php">About Us</a></li>
                <li><a href="gallery.php">Gallery</a></li>
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
							if(isset($_SESSION['username']) && isset($_SESSION['password']))
							{
								echo "<li><a href=''>Welcome ".$_SESSION['username']."</a></li>";
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
    <!-- top navigation bar -->

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
                <img src="images/slider2.jpg" class="img-responsive"  alt="Chania" width="460" height="345">
            </div>

            <div class="item">
                <img src="images/slider4.jpg"  class="img-responsive" alt="Flower" width="460" height="345">
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
                        <div class="col-sm-10 col-xs-9">
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
<!--/upcoming event-->

<!--Alumni Dashboard-->
<div class="container">
    <div class="alumni-dashboard">
        <div class="container">
            <div class="title title-dashboard type1">
                <h3 class="heading-light no-margin"> My KCL-IMT Alumni Dashboard </h3>
            </div>
            <div class="area-content">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="fa fa-envelope fa-lg "></div>
                        <div class="box-content">
                            <h4 class="heading-regular"> Checking Message </h4>
                            <p class="text-content text-margin text-light ">
                                Check Your message and reply.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="fa fa-user fa-lg "></div>
                        <div class="box-content">
                            <h4 class="heading-regular"> <a href="update_profile.php" style="color:black">Update My Information </a></h4>
                            <p class="text-content text-margin text-light">
                                Update your profile information and make changes.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="fa fa-users fa-lg "></div>
                        <div class="box-content">
                            <h4 class="heading-regular"> <a href="signup.php" style="color:black">Join with Alumni Forum </a></h4>
                            <p class="text-content text-margin text-light">
                                Sign up and become alumni
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="fa fa-search fa-lg "></div>
                        <div class="box-content">
                            <h4 class="heading-regular" ><a href="alumni_directory.php" style="color:black"> Search Alumni Directory </a></h4>
                            <p class="text-content text-margin text-light">
                                Search alumni student in alumni directory.
                            </p>
                        </div>
                    </div>
                    <div class="login-dashboard text-center col-sm-12 col-xs-12">
                        <a href="login.php" class="bnt bnt-theme login-links">LOG IN TO ALUMNI DASHBOARD</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--Alumni Dashboard-->

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
                        <h4 class="heading-light text-capitalize">Alumni Interview</h4>
                        <h1 class="heading-light text-capitalize">Hannah Jordan</h1>
                    </div>
                    <div class="interview-desc text-left">
                        <p class="text-light">KCL-IMT provides me the best place to groom myself academically. I heartily thank the excellent faculty of this institute for brightening out best in me” – Dolly Verma (MCA) “Being a student of KCL-IMT has been a truly stimulating.</p>
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
<!--footer start here-->
<div class="footer-wrapper type2">
<footer class="foooter-container">
    <div class="container">
        <div class="footer-middle">
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 animated footer-col fadeIn">
                    <div class="contact-footer">
                        <div class="logo-footer" style="bordeR:1px solid red">
                            <a href="index.php"><img src="images/logo-footer.png" alt="">
                                <span class="text-light" style="font-size:14px">Disseminating knowledge creativity and leadership</span>
                            </a>
                        </div>

                    </div>
                </div>
                <div class="col-lg-5 col-md-4 col-sm-4  col-xs-4 animated footer-col fadeIn">
                    <div class="links-footer"  style="margin-top:20px;"	 >
                        <div class="row" >
                            <div class="col-lg-6 col-sm-6">
                                <h6 class="heading-bold">DASHBOARD</h6>
                                <ul class="list-unstyled no-margin">
                                    <li><a href="signup.php">REGISTER</a></li>

                                    <li><a href="alumni_story.php">STORY</a></li>
                                    <li><a href="alumni_directory.php">DIRECTORY</a></li>
                                </ul>
                            </div>

                            <div class="col-lg-6 col-sm-6">
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
                <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12 animated footer-col fadeIn">
                    <div class="links-social">
                        <div class="login-dashboard"  style="margin-top:20px;">
                            <a href="login.php" class="bg-color-theme text-center text-regular">
                                Login Dashboard</a>
                        </div>
                        <ul class="list-inline text-center"  style="margin-top:20px;">
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.youtube.com/channel/UCPqjGenDAqZOH4PGV4P7fTw"><i class="fa fa-youtube" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.facebook.com/Kcl-Imt-259148417429520/?ref=br_rs"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom text-center">
            <p class="copyright text-light">�2017 Alumni Association of the KCL-IMT</p>
        </div>
    </div>
</footer>
</div>
<!--footer end-->


</div>

<!-- main wrapper -->
</body>


</html>






