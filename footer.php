	<div class="footer-wrapper type2">
        <footer class="foooter-container">
            <div class="container">
                <div class="footer-middle">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 animated footer-col fadeIn">
                            <div class="contact-footer">
                                <div class="logo-footer" style="bordeR:1px solid red">
                                    <a href="index.php"><img src="images/logo-footer.png" alt="" class="img-responsive">
									<span class="text-light" style="font-size:14px">Disseminating knowledge creativity and leadership</span>
									</a>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-4 col-sm-4  col-xs-12 animated footer-col fadeIn">
                            <div class="links-footer"  style="margin-top:20px;margin-bottom:20px;"	 >
                                <div class="row" >
                                    <div class="col-lg-6 col-sm-6 text-center">
                                        <h6 class="heading-bold">DASHBOARD</h6>
                                        <ul class="list-unstyled no-margin">
                                            <li><a href="signup.php">REGISTER</a></li>
                                            
                                            <li><a href="alumni_story.php">STORY</a></li>
                                            <li><a href="alumni_directory.php">DIRECTORY</a></li>
                                        </ul>
                                    </div>
                                    
                                    <div class="col-lg-6 col-sm-6 text-center" >
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
						<?php
						if($_SESSION==NULL)
						{
							?>
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
							<?php
						}
							?>
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
	
