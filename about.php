<?php
if(isset($_SESSION))
{

//echo "<br><a href=logout.php>Logout</a>";
}
else
{
//header('location:newindex.php');
}

include('header.php');
 

?>		
		            
<!--begin about us-->
<div class="about-us">
    <div class="about-us-title text-center" style="background-image: url('images/cover-image.jpg');margin-top: 5%;" >
        <div class="container">
            <h1 class="heading-bold text-uppercase">About us</h1>
        </div>
    </div>
    <div class="about-us-content">
        <div class="container">
            <div class="content-wrapper">
                <p class="text-light " >
					<h3>Our Vision</h3><br/>

<h4 class="text-justify" style="line-height:1.5">To be a vibrant and innovative centre of education, research, executive training and consultancy in management and technology; to develop a cadre of socially responsive managers, technocrats, entrepreneurs and professionals, thereby fulfilling the contemporary needs of the industry, business, government and the community at large, both locally and nationally.</h4><br/><br/>

<h3>Our Mission</h3><br/>

<h4 class="text-justify" style="line-height:1.5">To impart quality education, training and research in consonance with the vision of the institute, by providing state-of-the-art infrastructure and a learner friendly atmosphere in synergy with innovative pedagogy and networking with industry; to produce world class academicians, leaders and practitioners in related disciplines, thereby emerging as one of the premier institute of the region.</h4><br/><br/>

<h3>Our Institute</h3><br/>

<h4 class="text-justify" style="line-height:1.5">KCL-IMT has the distinction to be promoted in 2010 by Khalsa College Lyallpur Education Charitable Trust, which has a glorious history of more than hundred years of contribution to the field of education and social cause. The aim of KCL-IMT is to provide self employability skills, training and knowledge compatible to the industry and academic needs in the field of Management and Information Technology. Our endeavour would be to provide quality education to our students and further plan to develop it into a premier institute in the region.<br/><br/>

KCL-IMT is approved by All India Council of Technical Education (New Delhi), Punjab Govt. and affiliated to I K Gujral- Punjab Technical University, Kapurthala.</h4>
				</p>
            </div>
        </div>
    </div>
</div>
<!--end about us-->





<!--begin programs & services-->
<div class="programs-services">
    <div class="container">
        <div class="row">
            <div class="services-img col-md-6 col-sm-12 col-xs-12">
                <img class="img-responsive" src="images/services-img.jpg" alt="Programs &amp; Services">
            </div>
            <div class="services-content col-md-6 col-sm-12 col-xs-12">
                <h2 class="heading-regular">Programs &amp; Services</h2>
                <div id="tab_services">
                    <!--Nav tabs-->
                    <ul class="nav nav-tabs" role="tablist">
                                                <li role="presentation" class="active">
                            <a class="text-light" href="#tab1" aria-controls="tab1" role="tab" data-toggle="tab">Social</a>
                        </li>
                                                                        <li role="presentation">
                            <a class="text-light" href="#tab2" aria-controls="tab2" role="tab" data-toggle="tab">Professional</a>
                        </li>
                                                                        <li role="presentation">
                            <a class="text-light" href="#tab3" aria-controls="tab3" role="tab" data-toggle="tab">Intellectual</a>
                        </li>
                                            </ul>
                    <div class="tab-content">
                        
<!--Tab panes-->
<div role="tabpanel" class="tab-pane active animated zoomIn" id="tab1">
    <div class="tab-content-wrapper">
<ul class="list-item text-light">    
<li><p><strong>Blood Donation Camp</strong><br/>
Blood donation camp was organised by Human Values and Professional Ethics cell (HVPE) of KCL-IMT in association with Civil Hospital, Jalandhar where more than 100 students and faculty members donated blood for the social cause.</p></li>
<!--<li><p><strong>Swachh Bharat</strong><br/>
In order to promote hygiene and to support cleanliness drive launched by Hon’ble Prime Minister Shri Narenda Modi, KCL-IMT organized “Swachh Bharat” campaign to generate awareness among students and locals about protecting our environment from ill effects of pollution and to keep our surroundings neat and clean. In this event, students participated in number of competitions e.g. poster making, collage preparation, paper presentations and quiz related to environment and green management.</p></li>-->

</ul>
    </div>
</div>


<!--Tab panes-->
<div role="tabpanel" class="tab-pane  animated zoomIn" id="tab2">
    <div class="tab-content-wrapper">
    

<ul class="list-item text-light">
	<li><p><strong>Social Sensitization</strong><br/>
Giving back to society is an important aspect of an educational institute. KCL-IMT is well aware about its social responsibility to make our students trustworthy citizens and good human being. The Institute celebrated events to inculcate amongst the students the sense of service to humanity.</p></li>
</ul>
    </div>
</div>


<!--Tab panes-->
<div role="tabpanel" class="tab-pane  animated zoomIn" id="tab3">
    <div class="tab-content-wrapper">
    
<ul class="list-item text-light"><li><p><strong>Live Discussion on Budget Session</strong><br/>
KCL-IMT organised the live discussion on the interim Budget presented in the Parliament by the Hon’able Finance Minister of India in which the comprehensive analysis of the key provisions mention in the budget carried out in a very interactive manner.</p></li>
</ul>
    </div>
</div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end programs & services-->

<!--begin newsletter-->
<div class="newsletter newsletter-parallax type2" data-parallax="scroll" >
        <div class="container">
            <div class="newsletter-wrapper text-center">
                <div class="newsletter-title">
                    <h2 class="heading-light">Don't Miss Awesome Story From Our Alumni</h2>
                    <p class="text-light">Duis autem vel eum iriure dolor in hendrerit in vulputate.</p>
                </div>
                <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-600" method="post" data-id="600" data-name="Subscription"><div class="mc4wp-form-fields"><div class="form-inline">
  
  <input type="text" class="form-control text-center form-text-light" name="EMAIL" value="" placeholder="Your E-mail address">
  <button type="submit" class="button bnt-theme">SUBSCRIBE</button>
</div><div style="display: none;"><input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off"></div><input type="hidden" name="_mc4wp_timestamp" value="1491132362"><input type="hidden" name="_mc4wp_form_id" value="600"><input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1"></div><div class="mc4wp-response"></div></form>           </div>
        </div>
    </div>
    <!--end newsletter-->


    
                </div>
		
	<!-- footer -->
		<?php 
		include_once('footer.php');
		?>
	<!-- /footer -->	