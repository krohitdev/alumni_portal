<?php
ob_start();
include('header.php');
if($_SESSION==NULL)
{
	///header('location:login.php');
}

?>
	<script>
        function previewImage(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function (e) {
                    $('#image')
                        .attr('src', e.target.result)
                };
                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
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
	 <!-- /top navigation -->

        <!-- page content -->
	<div class="container">
	<br><br><br><br>
        <div class="right_col" role="main">

            <div class="page-title">
              <div class="title_left">
                
				<div class="container">
					<br/><br/>
					<h3 class="text-center">
					Alumni Registration Form</h3>
					<hr>
					<br/><br/>
				</div>
              </div>

             
            </div>
            <div class="clearfix"></div>
            <div class="row">
				  <div class="col-md-12 col-sm-12 col-xs-12">
					<div class="x_panel">
					  <div class="x_title">
						
						<div class="clearfix"></div>
					  </div>
					  
              
           
		
					
					<?php
include('oops_query.php');

?>
		<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="" method="post" onsubmit="return myf1()"   enctype="multipart/form-data">
	
                      <div class="form-group ">
							<label class="control-label col-lg-4 col-md-3 col-sm-3 col-xs-12" for="image">Image <span class="required">*</span>
							</label>
							<div class=" myprofile ">
									<div class="profile_pic1"><img src="images/download.jpg" id="image" class="p_pic text-center" height="120px" width="120px;"> 
									<input type="file" name="inputfile2"  onchange="previewImage(this);"
										class="col-md-7 col-xs-12" required>
									</div>
							</div>
						</div>	
					  
					  
					  <div class="form-group">
					  
                        <label class="control-label col-lg-4 col-md-3 col-sm-3 col-xs-12" for="username">Username <span class="required">*</span>
                        </label>
                        <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                          <input type="text" id="username" required="required" name="username" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-4 col-md-3 col-sm-3 col-xs-12" for="password">password <span class="required">*</span>
                        </label>
                        <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                          <input type="password" id="password" name="password" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      
					  <div class="form-group">
                        <label class="control-label col-lg-4 col-md-3 col-sm-3 col-xs-12" for="email">E-mail <span class="required">*</span>
                        </label>
                        <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                          <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12" >
                        </div>
                      </div>
					  
					  <div class="form-group">
                        <label class="control-label col-lg-4 col-md-3 col-sm-3 col-xs-12" for="dob">Dob <span class="required">*</span>
                        </label>
                        <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                          <input type="date" id="dob" name="dob" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
					<div class="form-group">
                        <label class="control-label col-lg-4 col-md-3 col-sm-3 col-xs-12" for="address">Address<span class="required"> *</span></label>
						 <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
							<textarea id="address" class="form-control" name="address"  placeholder="Enter Address" required  ></textarea >	
						</div>
                      </div>
					  
                      <div class="form-group">
                        <label for="middle-name" class="control-label col-lg-4 col-md-3 col-sm-3 col-xs-12">City<span class="required"> *</span></label>
                        <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                          <input id="middle-name" class="form-control col-md-7 col-xs-12" name="city" type="text" name="middle-name">
                        </div>
                      </div>
                      
					 
                      <div class="form-group">
                        <label class="control-label col-lg-4 col-md-3 col-sm-3 col-xs-12">Class<span class="required"> *</span></label>
                        <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                          <div id="class" class="btn-group" data-toggle="buttons">
                            <div class="input-group">
								<div class="input-group-addon">
								  <input type="radio" name="class" value="BCA"> &nbsp; BCA &nbsp;
								  <input type="radio" name="class" value="MCA"> &nbsp; MCA &nbsp;
								
								</div>
							</div>
                          </div>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-lg-4 col-md-3 col-sm-3 col-xs-12">Session<span class="required"> *</span>
                        </label>
                        <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                          <input id="text" class="form-control col-md-7 col-xs-12" required="required" type="text" name="session">
                        </div>
                      </div>
					  
					  <div class="form-group">
                        <label class="control-label col-lg-4 col-md-3 col-sm-3 col-xs-12">Comapany<span class="required"> *</span>
                        </label>
                        <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                          <input id="text" class="form-control col-md-7 col-xs-12" required="required" type="text" name="company">
                        </div>
                      </div>
					  
					  <div class="form-group">
                        <label class="control-label col-lg-4 col-md-3 col-sm-3 col-xs-12">Profile<span class="required"> *</span>
                        </label>
                        <div class="col-lg-5 col-md-6 col-sm-6 col-xs-12">
                          <input id="text" class="form-control col-md-7 col-xs-12" required="required" type="text" name="profile">
						  </div>
                      </div>
					  
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
							<button type="submit" class="btn btn-success" name="submit_alumni">Submit</button>
							<button class="btn btn-primary" type="reset">Reset</button>
							<button class="btn btn-danger" type="reset">Cancel</button>	
						<?php
						if(isset($success))
						{
							echo "<Strong>".$success."</strong>";
						} ?>
						</div>
                      </div>

                    </form>
		
		        
  		</div>
        <!-- /page content -->

        <!-- footer content -->
       <?php
include('footer.php');
?>