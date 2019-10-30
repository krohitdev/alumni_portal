<?php
ob_start();
 include('header.php');


			
 ?>

		<br><br><br><br>
		
		<!-- body content -->
			<div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-5 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
            <div class="panel panel-success" >
                    <div class="panel-heading">
							<div class="panel-title">Sign In
						<?php
	
	if(isset($_POST['login']))
	{
		$u_type=$_POST['u_type'];
		$email=$_POST['email'];
		
		$password=md5($_POST['password']);
		if($u_type=="student")
	
		{
			$conn=mysqli_connect("localhost","root","","alumni");
			$query=mysqli_query($conn,"select * from student where email='".$email."' and password='".$password."'");
			$rowcount=mysqli_num_rows($query);
			while($r=$query->fetch_assoc())
			{
				header("location:index.php");
				$_SESSION['username']=$r['username'];
				$_SESSION['password']=$r['password'];
				$_SESSION['id']=$r['id'];
				$_SESSION['email']=$r['email'];
				$_SESSION['u_type']='student';
	
			}
		}
		else
			{
				echo "<script> alert('* invalid UserName or Password');</script>";        
			}

		if($u_type=="alumni")

		{
			$conn=mysqli_connect("localhost","root","","alumni");
			$query=mysqli_query($conn,"select * from registration where email='".$email."' and password='".$password."' and status='enable'" );
			$rowcount=mysqli_num_rows($query);
			while($r=$query->fetch_assoc())
			{
				header("location:myaccount.php");
				$_SESSION['username']=$r['username'];
				$_SESSION['password']=$r['password'];
				$_SESSION['id']=$r['id'];
				$_SESSION['email']=$r['email'];
				$_SESSION['u_type']='alumni';
			}
			
		}
		else
			{
				echo "<script> alert('* invalid UserName or Password');</script>"; 
			}

		
	}
			
			
		
		
?>
						
						</div>
                        
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                            
                        <form id="loginform" method="post" action="" class="form-horizontal" role="form">
                                    
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user fa-lg"></i></span>
                                        <input id="login-username" type="text" class="form-control" name="email" value="" placeholder="email" required>                                        
                                    </div>
                                
                            <div style="margin-bottom: 25px" class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-lock fa-lg"></i></span>
                                        <input id="login-password" type="password" class="form-control" name="password" placeholder="password" required>
                                    </div>
                            <div style="margin-bottom: 25px"  class="input-group">
							
								<div class="input-group-addon">
                       <span class="required pull-left"> User Type *</span>
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            
                              <input type="radio" name="u_type" value="alumni" required> &nbsp; Alumni &nbsp;
                              <input type="radio" name="u_type" value="student" required> &nbsp; Student &nbsp;
                            
                        </div>
                        </div>
                      </div>
                      
                                    

                                
                            <!--Remember button
								<div class="input-group">
                                      <div class="checkbox">
                                        <label>
                                          <input id="login-remember" type="checkbox" name="remember" value="1"> Remember me
                                        
										</label>
                                      </div>
								</div>-->


                                <div style="margin-top:10px" class="form-group">
                                    <!-- Button -->

                                    <div class="col-sm-12 controls">
                                     <!--  <a id="btn-login" name="login" href="#" class="btn btn-success" name="login">Login  </a>
                                      -->
									  <input type="submit" value="login" name="login" class="btn btn-success"> 
									  <a id="btn-fblogin" href="#" class="btn btn-primary">Login with Facebook</a>

                                    </div>
                                </div>


                                </form>     



                        </div>                     
                    </div>  
        </div>
        <!-- /main wrapper -->
	</body>
</html>
