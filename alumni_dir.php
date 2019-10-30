<?php



include('header.php');
  if($_SESSION==NULL)
{
	header('location:login.php');
}



?>		
		
		
		<!-- body content -->
			<div id="content" class="site-content content-wrapper page-content">

            
          						
						
<article id="post-330" class="post-330 page type-page status-publish hentry">

            <div class="entry-content">
                <div class="page-content-body">
                    
    <div class="galery-wrapper">
        <div class="container">
			<div class="galery-title text-center"><br>
                <h4 class="heading-regular" style="padding:2%;">ALUMNI GALERY</h4>
            </div>
                        <div class="galery-content">
                <ul>
                    <?php
						include('../gentelella-master/production/oops_query.php');

	$result = $obj->fetch_record("registration");
	$row1=mysql_num_rows($result);
	while($row=mysqli_fetch_array($result))
	{
		$pgs=4;
		$rov = ceil ($nor/$pgs);
		$i=1;
		if(isset($_GET['page']))
		{
			$cnt_page =$_GET['page'];
		}
		else
		{
			$cnt_page =1 ;
		}
		$offset = ($cnt_page-1)*$pgs;
		$pre=$cnt_page-1;
		$nxt=$cnt_page+1;
		if($cnt_page>1)
		{
			echo "<li><a href=alumni_dir.php1?page=".$i.">".$i."</a></li>&nbsp";
		}
		if($cnt_page<$rov)
		{
			echo "<li><a href=alumni_dir.php1?page=".$next.">Next</a><li>";
		}
		$sqlnew="select * from registration LIMIT $offset,$pgs";
		$resultnew=mysql_query($sqlnew);
		while($row=mysql_fetch_array($resultnew))
		{
		?>          <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">          
                    <li class="">
					
                        <div class="galery-item">
						
						
						<a href="alumni_profile.php?view_astudent=1&id=<?php echo $row['id'];?>" onclick="f2()" ><img src="../gentelella-master/production/alumni_upload/<?php echo $row['email'];?>/<?php echo $row['img'];?>"
                            width="290" height="290" class="img-rounded" alt="">                            
							<div class="galery-content">
                                <h4><a href=''><?php echo $row['username']; ?></h4></a>
                                <a href="#" class="popup-click"><span class="lnr lnr-magnifier"></span></a>
                            </div>
                            
                        </div>
                    </li>
					</div>
				<?php
		}
	}

?>		
              </div>
	<div class="pagination-wrapper"><ul class="pagination"><li><span class='page-numbers current'>1</span></li><li><a class='page-numbers' href=''>2</a></li><li><a class='page-numbers' href=''>3</a></li><li><a class="next page-numbers" href="">Next&nbsp;&nbsp;&nbsp;</a></li></ul></div>                           
				</div>
            
   

    

    <!--begin newsletter-->
<div class="newsletter newsletter-parallax type2">
        <div class="container">
            <div class="newsletter-wrapper text-center">
                <div class="newsletter-title">
                    <h2 class="heading-light">Don’t Miss Awesome Story From Our Alumni</h2>
                    <p class="text-light">Duis autem vel eum iriure dolor in hendrerit in vulputate.</p>
                </div>
                <script type="text/javascript">(function() {
	if (!window.mc4wp) {
		window.mc4wp = {
			listeners: [],
			forms    : {
				on: function (event, callback) {
					window.mc4wp.listeners.push({
						event   : event,
						callback: callback
					});
				}
			}
		}
	}
})();
</script><form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-600" method="post" data-id="600" data-name="Subscription"><div class="mc4wp-form-fields"><div class="form-inline">
  
  <input type="text" class="form-control text-center form-text-light" name="EMAIL" value="" placeholder="Your E-mail address">
  <button type="submit" class="button bnt-theme">SUBSCRIBE</button>
</div><div style="display: none;"><input type="text" name="_mc4wp_honeypot" value="" tabindex="-1" autocomplete="off"></div><input type="hidden" name="_mc4wp_timestamp" value="1491135278"><input type="hidden" name="_mc4wp_form_id" value="600"><input type="hidden" name="_mc4wp_form_element_id" value="mc4wp-form-1"></div><div class="mc4wp-response"></div></form></div>
        </div>
    </div>
    <!--end newsletter-->


    
                </div>
                                </div><!-- .entry-content -->

            
</article><!-- #post-## -->
			            </div>
		<!-- /body content -->
		
		<!-- footer -->
			<?php 
			include_once('footer.php');
			?>
		<!-- /footer -->
	
	</div>
	<!-- /main wrapper -->
	</body>
</html>
	
		