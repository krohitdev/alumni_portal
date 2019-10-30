<?php

include('header.php');
if($_SESSION==NULL)
{
	header('location:login.php');
}

 include('oops_query.php');

?>		
		            
<!--begin about us--><br><br><br><br><br><br><br><br>
 <div class="container bootstrap snippet">
    <div class="row">
	
        <div class="col-md-offset-3 col-md-6 col-xs-12">
		<h4 class='active'><a href='#'>Update status</a></h4>
		
            <div class="well well-sm well-social-post">
			
        <form name="post_page" method="post" action="" enctype="multipart/form-data">
				
            <ul class="list-inline" id='list_PostActions'>
                <li class=" myprofile1" ><a class="profile_pic1"><h5 class="p_pic">Add photos</h5></a>
				<input type="file" name="attachPhoto1"  class="inputfile1"  onchange="previewImage(this);">
				</li>
               
            </ul>
            <textarea class="form-control" placeholder="What's in your mind?" name="post"></textarea>
			
            <ul class='list-inline post-actions'>
			<input type="hidden" name="post_by" value="<?php echo $_SESSION['username']; ?>">
			   <li class='pull-right'><input class='btn btn-primary btn-md' name="add_post" type="submit" value="post"></li>
            </ul>
			
        </form>
            </div>
        </div>
    </div>
</div>     
     

<!--end about us-->







    
                
		
	<!-- footer -->
		<?php 
		include_once('footer.php');
		?>
	<!-- /footer -->	