<?php
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
ob_start();
include('header.php');

?>
<style>
section#contact {
    background-color: #222222;
    background-image: url('http://artdnaswitchbd.com/componants/images/map-image.png');
    background-position: center;
    background-repeat: no-repeat;
}
section {
    padding: 30px 0PX;
}
section#contact .section-heading {
    color: white;
}
section#contact .form-group {
    margin-bottom: 25px;
}
section#contact .form-group input,
section#contact .form-group textarea {
    padding: 20px;
}
section#contact .form-group input.form-control {
    height: auto;
}
section#contact .form-group textarea.form-control {
    height: 236px;
}
section#contact .form-control:focus {
    border-color: #fed136;
    box-shadow: none;
}
section#contact ::-webkit-input-placeholder {
    font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif;
    text-transform: uppercase;
    font-weight: 700;
    color: #eeeeee;
}
.gellary_bg_none img{
	width: 100%;
	height: 250px;
}
section#contact :-moz-placeholder {
    /* Firefox 18- */
    font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif;
    text-transform: uppercase;
    font-weight: 700;
    color: #eeeeee;
}
section#contact ::-moz-placeholder {
    /* Firefox 19+ */
    font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif;
    text-transform: uppercase;
    font-weight: 700;
    color: #eeeeee;
}
section#contact :-ms-input-placeholder {
    font-family: "Montserrat", "Helvetica Neue", Helvetica, Arial, sans-serif;
    text-transform: uppercase;
    font-weight: 700;
    color: #eeeeee;
}
section#contact .text-danger {
    color: #e74c3c;
}

.about_our_company{
    text-align: center;
}
.about_our_company h1{
    font-size: 25px;
}
.titleline-icon {
    position: relative;
    max-width: 100px;
    border-top: 4px double #F99700;
    margin: 20px auto 20px;
}
.titleline-icon:after {
    position: absolute;
    top: -11px;
    left: 0;
    right: 0;
    margin: auto;
    font-family: 'FontAwesome';
    content: "\f141";
    font-size: 20px;
    line-height: 1;
    color: #F99700;
    text-align: center;
    vertical-align: middle;
    width: 40px;
    height: 20px;
    background: #ffffff;
}
.contact_font
{
	font-size:20px;
}
.contact
{
	padding-top:30px;	
	padding-bottom:30px;	
}
</style>


	<section id="contact" style="">
            <div class="container">
                <div class="row">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="about_our_company" style="margin-bottom:20px;margin-top:6%;">
                        <h1 style="color:#fff;">Write Your Message</h1>
                        <div class="titleline-icon"></div>
                        <p style="color:#fff;">Feel free to contact us </p>
                    </div>
				</div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                        <form name="sentMessage" id="contactForm" novalidate="" method="post" action="oops_query.php">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
										
                                        <input type="text" class="form-control" placeholder="Your Name *" id="name" required="" data-validation-required-message="Please enter your name.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your Email *" id="email" required="" data-validation-required-message="Please enter your email address.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required="" data-validation-required-message="Please enter your phone number.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Your Message *" id="message" required="" data-validation-required-message="Please enter a message."></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-12 text-center">
                                    <div id="success"></div>
                                    <button type="submit" class="btn btn-lg get col-lg-12">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
					<div class="col-lg-4 col-md-4 col-sm-12">
						<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6817.509617736948!2d75.59898556145028!3d31.310521286043933!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa212ba939239a831!2sKCL+Institute+of+Management+and+Technology!5e0!3m2!1sen!2sin!4v1493379198610" width="100%"  frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="container">
                    <div class="col-lg-6 col-md-6 col-sm-6 contact text-center"  >
                        <p style="color:#fff;" class="contact_font">
                            <strong><i class="fa fa-map-marker "></i> Visit Us</strong><br/>
                            KCL-IMT GT Road Nr. Khalsa College,<br> Jalandhar.
                        </p>
					</div>
					
					<div class="col-lg-5  col-md-6 col-sm-6 contact text-center" >
					<p style="color:#fff;" class="contact_font" ><strong><span> Get In Touch </span></strong><br>
                           <i class="fa fa-phone"></i> 0181 2222222</p>
                        <p style="color:#fff;" class="contact_font">
                            <i class="fa fa-envelope"></i>  alumni@kclimt.com<br>
						</p>
					</div>
                </div>
            </div>
        </section>


<!--Begin footer wrapper-->
<?php 
	include_once('footer.php');
?>

<!--end footer wrapper-->

</body>
</html>
