<br><br><br>
<?php



include('header.php'); 

echo "<br><br><br>";
 // if($_SESSION==NULL)
// {

	// header('location:login.php');
// } 

?>		<!--End header wrapper-->

        <!--Begin content wrapper-->
            <!--Begin content wrapper-->
    <div class="content-wrapper">
        <div class="container">
      <div class="row">
      
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   <?php
include('oops_query.php');


if(isset($_GET["view_astudent"]) && isset($_GET["id"]) )
{
		$id=$_GET["id"];
		$where = array(
		"id"=>$id
		);
		$result = $obj->select_record("registration",$where);
		$row=mysqli_fetch_array($result);
		
		
		
		?>
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo $row['username'];?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-12 col-lg-12 " align="center">
				<a class="example-image-link" href="../gentelella-master/production/alumni_upload/<?php echo $row['email'];?>/<?php echo $row['img'];?>" data-lightbox="example-set" data-title="">
				<img alt="User Pic" src="../gentelella-master/production/alumni_upload/<?php echo $row['email'];?>/<?php echo $row['img'];?>" class="img-rounded img-responsive example-image img img-thumbnail"> 
				</a></div>
                
              
				
                <div class=" col-md-12 col-lg-12 "> 
                  <table class="table table-user-information">
				  <div class="container "> 
                
                    <tbody>
                      <tr>
						<input type="hidden" name="id" value="<?php echo $id; ?>">
                        
                      <tr>
                        <td>Username:</td>
                        <td><?php echo $row['username'];?></td>
                      </tr>
                      <tr>
                        <td>E-Mail ID</td>
                        <td><?php echo $row['email'];?></td>
                      </tr>
                      <tr>
                        <td>Address</td>
                        <td><?php echo $row['address'];?></td>
                      </tr>
                   
                         
                        <td>Company</td>
                        <td><?php echo $row['company'];?></td>
                      </tr>
                        <tr>
                        <td>Session</td>
                        <td><?php echo $row['session'];?></td>
                      </tr>
                      <tr>
                        <td>Profile</td>
                        <td><?php echo $row['profile'];?></td>
                      </tr>
                        
                           
                      </tr>
                     
                    </tbody>
					</div>
                  </table>
                  
                  
					
                </div>
				
				<?php
	}
	
	else 
	{
		?>

		        
  		<?php 
		
	}
?>
				
				
              </div>
            </div>
                 <div class="panel-footer">
                        	<div class="text-left">
                            <a href="message.php" data-toggle="tooltip" title="Send Message!" type="button" class="btn btn-lg "><span>Message </span><i class="fa fa-pencil-square-o fa-lg"></i></a>
							</div>
                            
                        </span>
                    </div>
            
          </div>
        </div>
      </div>
        
        </div>
    </div>
    <!--End content wrapper-->


    
                <!-- #primary -->
</div><!-- #content -->

<!--Begin footer wrapper-->
	<?php
	include_once('footer.php');
	?>
<!--End footer wrapper-->

	
</body>
</html>
