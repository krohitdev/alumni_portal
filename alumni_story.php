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
include('header.php');

?>
<!--End header wrapper-->

        <!--Begin content wrapper-->
			<section id="carousel">        			
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
                <div class="quote"><i class="fa fa-quote-left fa-4x"></i></div>
				<div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
				  <!-- Carousel indicators -->
                  <ol class="carousel-indicators">
				    <li data-target="#fade-quote-carousel" data-slide-to="0"></li>
				    <li data-target="#fade-quote-carousel" data-slide-to="1"></li>
				    <li data-target="#fade-quote-carousel" data-slide-to="2" class="active"></li>
                    <li data-target="#fade-quote-carousel" data-slide-to="3"></li>
                    <li data-target="#fade-quote-carousel" data-slide-to="4"></li>
                    <li data-target="#fade-quote-carousel" data-slide-to="5"></li>
				  </ol>
				  <!-- Carousel items -->
				  <div class="carousel-inner">
				    <div class="item">
                        <div class="profile-circle"><img src='images/galery-popup-13-3-2-290x290.jpg' class="img-responsive img-rounded" ></div>
				    	<blockquote>
				    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
				    	</blockquote>	
				    </div>
				    <div class="item">
                        <div class="profile-circle" style="background-color: rgba(,.2);background-image:url('images/galery-popup-13-3-2-290x290.jpg'); "></div>
				    	<blockquote>
				    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
				    	</blockquote>
				    </div>
				    <div class="active item">
                        <div class="profile-circle" style="background-color: rgba(,.2);background-image:url('images/galery-popup-13-3-2-290x290.jpg');"></div>
				    	<blockquote>
				    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
				    	</blockquote>
				    </div>
                    <div class="item">
                        <div class="profile-circle" style="background-color: rgba(,.2);background-image:url('images/galery-popup-13-3-2-290x290.jpg');"></div>
    			    	<blockquote>
				    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
				    	</blockquote>
				    </div>
                    <div class="item">
                        <div class="profile-circle" style="background-color: rgba(,.2);background-image:url('images/galery-popup-13-3-2-290x290.jpg');"></div>
    			    	<blockquote>
				    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
				    	</blockquote>
				    </div>
                    <div class="item">
                        <div class="profile-circle" style="background-color: rgba(,.2);background-image:url('images/galery-popup-13-3-2-290x290.jpg');"></div>
    			    	<blockquote>
				    		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
				    	</blockquote>
				    </div>
				  </div>
				</div>
			</div>							
		</div>
	</div>
</section>
        <!--Begin content wrapper-->
		
		<!-- #content -->

<!--Begin footer wrapper-->
<?php 
include_once('footer.php');
?>
<!--End footer wrapper-->

	
</body>
</html>
