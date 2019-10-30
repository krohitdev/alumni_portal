
<?php 
include('header.php'); 
include('connection.php'); 

?>
<div class="content-wrapper">
        <div class="container">
      <div class="row">
      
        <div class=" col-lg-6  col-md-6 col-sm-12 col-xs-12 col-md-6col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
		<br/><br/><br/>
		<h3 class="text-center">My Profile</h3><br/><br/>
   <?php
				$id=$_SESSION['username']; 
				if($id=="")
				{
					echo "<script>alert('Invalid ID'); window.location='login.php';</script>";
				}
				else
				{
					$q="select * from registration where username='$id'";
					echo $q;
					$chk=$con->query($q);
					while($r=$chk->fetch_assoc())
					{
		
		?>
          <div class="panel panel-info">
            <div class="panel-heading">
              <h3 class="panel-title"><?php echo $r['username'];?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
				<div class="col-lg-3 col-md-2 col-sm-3"></div>
                <div class=" col-lg-6 col-md-8 col-sm-6 col-xs-12"> <img alt="User Pic" src="../gentelella-master/production/alumni_upload/<?php echo $r['email'];?>/<?php echo $r['img'];?> " align="center" class="img-rounded img-responsive" > </div>
				<div class="col-lg-3 col-md-2 col-sm-3" ></div>
                </div>
              
                <div class="col-lg-12  col-md-12 col-xs-12 text-center"> 
                  <table class="table table-user-information">
				  <div class="container "> 
                
                    <tbody >
                      <tr>
						<input type="hidden" name="id" value="<?php echo $id; ?>">
                        
                      <tr>
                        <td>Username:</td>
                        <td><?php echo $r['username'];?></td>
                      </tr>
                      <tr>
                        <td>E-Mail ID</td>
                        <td><?php echo $r['email'];?></td>
                      </tr>
                      <tr>
                        <td>Address</td>
                        <td><?php echo $r['address'];?></td>
                      </tr>
                   
                         
                        <td>Company</td>
                        <td><?php echo $r['company'];?></td>
                      </tr>
                        <tr>
                        <td>Session</td>
                        <td><?php echo $r['session'];?></td>
                      </tr>
                      <tr>
                        <td>Profile</td>
                        <td><?php echo $r['profile'];?></td>
                      </tr>
                        
                           
                      </tr>
                     
                    </tbody>
					</div>
                  </table>
                  
                  
					
                </div>
				
				
		        
  		<?php
					}
				}
				?>
				
				
              </div>
            </div>
                 
          </div>
        </div>
      </div>

<?php
include('footer.php');


?>