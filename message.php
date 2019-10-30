<?php
ob_start();
 ?>
<?php
if($_SESSION['u_type']='student')
{

}
if($_SESSION['u_type']='alumni')

{

include('header.php');
}
if($_SESSION==NULL)
{
	header('location:login.php');
}


?>
<br/>
        <div class="right_col" role="main" style="margin-top:60px;">
          <!-- top tiles -->
          <div class="row tile_count">
                      </div>
					  
					  <!-- /.modal compose message -->
		<div class="container">
          <div class="modal-header ">
			<div class="col-sm-7 ">
            <a type="button" class="close" href="index.php" data-dismiss="modal" aria-hidden="true">×</a>
            <h4 class="modal-title">Compose Message</h4>
			</div>
          </div>
          <div class="modal-body">
            <form role="form" class="form-horizontal" name="message-form" method="post" action="oops_query.php">
                <div class="form-group">
				
					<label class="col-sm-1" for="inputTo">To</label>
					
					<div class="col-sm-6">
						
					  <select class="form-control selectpicker" data-style="btn-inverse" id="" name="to">
						<?php
						include('oops_query.php');
							$result = $obj->fetch_record("registration");
							while($row=mysqli_fetch_array($result))
							{
						?>
							<option name='to'><?php echo $row['email'];?></option>
						<?php
							}

						?>
					  </select>
					</div>
			  </div>
                <div class="form-group">
                  <label class="col-sm-1" for="inputSubject">Subject</label>
                  <div class="col-sm-6"><input type="text" class="form-control" id="inputSubject" placeholder="subject" name="subject"></div>
                </div>
				
                <div class="form-group">
                  <label class="col-sm-1" for="inputBody">Message</label>
                  <div class="col-sm-6"><textarea class="form-control" placeholder="Place Your Message Here" id="inputBody" rows="12" name="message"></textarea></div>
                </div>
				
				<div class="form-group">
						  <label class="col-sm-1 " for="sender">Sender<span class="required"> *</span></label>
							<div class="col-sm-6">
							  <select class="form-control selectpicker" data-style="btn-inverse" id="" name="sender">
								<option name='sender'><?php echo $_SESSION['username']; ?></option>
								
							  </select>
							</div>
					</div>
			
			<div class="modal-footer">
            <a class="col-md-2"></a> 
            <!--<button type="submit" class="btn btn-primary " name="send-message">Send <i class="fa fa-arrow-circle-right fa-lg"></i></button>-->
			<script>
			function f2()
			{
				alert('message send');
			}
			</script>
			<button type="submit" class="btn btn-success col-md-3" name="send_message" onclick="f2()">Send</button>	

          </div>		  
          </div>
          
       </form>
	   
	</div>
<?php	   if(isset($_POST["send_message"]))
{	echo $success; }?>
          <br />

         </div>
        <!-- /page content -->
       <?php
    include('footer.php');


?>