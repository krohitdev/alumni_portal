
<?php
include('header.php');
include('oops_query.php');
?>
<br/><br/>		<!-- body content -->

<div class="container">
<br><br><br>
	<div class="right_col" role="main">

            <div class="page-title">
              <div class="title_left">
                
				<div class="container">
					<br/><br/>
					<h3 class="">Student Registration Form</h3>
					<hr>
					<br/>
				</div>
              </div>

             
            </div>
            <div class="clearfix"></div>
			<div class="container">
            <div class="row">
				  <div class="col-md-11 col-sm-12 col-xs-12">
					<div class="x_panel">
					  <div class="x_title">
						
						<div class="clearfix"></div>
					  </div>
	<script>
function myf1()
{
	var f=document.getElementById("username").value;
	if(f=="")
	{
		alert("enter firstname");
		return false;
	}
	if (! isNaN(f))
	{
		alert("Invalid name!! Digits not Allowed!!");
		return false;
	}
	if (! isNaN(l))
	{
		alert("Invalid name!! Digits not Allowed!!");
		return false;
	}
	if(c!=u)
	{
		alert("Password MisMatch !!!");
		return false;
	}
	alert('registered');
}
</script>		  
				<form name="signup" method="post" action="" enctype="multipart/form-data" onsubmit="return myf1()" class="col-md-6" >
					<div class="form-group">
						<div class="input-group">
							<div class="input-group-addon">
								<label class="control-label col-md-3 col-sm-3 col-xs-12" for="image">Image <span class="required">*</span></label>
									
								<div class=" myprofile ">
									<div class="profile_pic1 ">
									<img src="images/download.jpg" id="image" class="p_pic text-center" height="120px" width="120px;" class="col-md-7 col-xs-12"> 
									<input type="file" name="attachPhoto1" class="inputfile2"  onchange="previewImage(this);"
										required>
									</div>
								</div>
							</div>
						</div>
							<br>
							<div class="input-group">
								<div class="input-group-addon">
									<span class="fa fa-user fa-lg" ></span>
								</div>	
								<input class="form-control "   id="username" name="username" type="text" placeholder="Enter your Username" required/>
								<label id="labfname"></label>
							</div>
						<br>
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-lock fa-lg" ></i>
								</div>
								<script>
									function checkLength(el) {
										if (el.value.length <= 6) {
											alert("length should not be less than 6 characters")
										}
									}
								</script>
								<input class="form-control" onfocusout="checkLength(this)"  id="pswd" name="password" type="Password" placeholder="Enter your Password" required/>
							</div>
						<br>
							
							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-envelope fa" ></i>
								</div>	
								<input class="form-control " id="email" name="email" type="email"placeholder="Enter your E-mail" required />
							</div>
						<br>
						<div class="input-group">	<div class="input-group-addon"> <span class="fa fa-calendar">
                    </span></div>
						<input type="date" id="dob" class="form-control" name="dob" placeholder="Select Your DoB" required> </div>
						<br>	
						<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-map-marker fa-lg"></i>
								</div>	
						<textarea id="address" class="form-control" name="address"  placeholder="Enter Address" required  ></textarea ><br>	
						</div>
							
							
						<br>	
							<div class="input-group">
								<div class="input-group-addon">
									
								
								Choose Course
						<input type="radio" name="course" value="BCA" checked >BCA	
						<input type="radio" name="course" value="MCA">MCA	<br/>
						</div></div>	
						
						
						<div class="form-group form-inline ">
						<div class="col-md-12"><br>
						<script>
						function f2()
						{
							alert('registered successfully, please login');
						}
						</script>
						<input type="submit" value="Submit" class="btn btn-success btn-lg btn-block login-button " name="submitstu" >
						</div>
						
						 </div>
						
							
						</div>	
					
				</form>
			</div>
			
		</div>
		</div>
                
  		<?php 
		
	
?>

	
		<!-- /body content -->
		
		<!-- footer -->
		<?php
			include_once('footer.php');
		?>
	
	</div>
	<!-- /main wrapper -->
	</body>
</html>
	
		