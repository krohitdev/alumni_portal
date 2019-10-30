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
if($_SESSION==NULL)
{
	header('location:login.php');
}


?>

<script>
$(document).ready(function() {
    var panels = $('.user-infos');
    var panelsButton = $('.dropdown-user');
    panels.hide();

    //Click dropdown
    panelsButton.click(function() {
        //get data-for attribute
        var dataFor = $(this).attr('data-for');
        var idFor = $(dataFor);

        //current button
        var currentButton = $(this);
        idFor.slideToggle(400, function() {
            //Completed slidetoggle
            if(idFor.is(':visible'))
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-up text-muted"></i>');
            }
            else
            {
                currentButton.html('<i class="glyphicon glyphicon-chevron-down text-muted"></i>');
            }
        })
    });


    $('[data-toggle="tooltip"]').tooltip();

    $('button').click(function(e) {
        e.preventDefault();
        alert("This is a demo.\n :-)");
    });
});
</script>
<div class="x_content">
                    <br />
                    <div class="x_content">
                    <br />
<div class="container">
      <div class="row">
      
        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-0 col-md-offset-3 col-lg-offset-3 toppad" >
   
   
          <div class="panel panel-info">
            <div class="panel-heading">
			<?php
include('oops_query.php');

if(isset($_GET["view"]) && isset($_GET["id"]) )
{
		$id=$_GET["id"];
		$where = array(
		"id"=>$id
		);
		$result = $obj->select_record("message",$where);
		$row=mysqli_fetch_array($result);
		
		//Update to read Yes
		$myArray = array(
		"status"=>'yes'
		);
		
		
		if($obj->update_record("message",$where,$myArray))
		{
				
			

		// //Update to read Yes
		?>

		
		
              <h3 class="panel-title"><?php echo $_SESSION['email'];?></h3>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="images/avatar-300x300.png" class="img-circle img-responsive"> 
				</div>
                
                <form method="post" action="oops_query.php">
				
                <div class=" col-md-9 col-lg-9 "> 
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
						<input type="hidden" name="id" value="<?php echo $id; ?>">
                        
                      <tr>
                        <td>Sender</td>
                        <td><?php echo $row['sender'];?></td>
                      </tr>
                      <tr>
                        <td>Message</td>
                        <td><?php echo $row['message'];?></td>
                      </tr>
                      <tr>
                        <td>Sending Time </td>
                        <td><?php echo $row['sending_time'];?></td>
                      </tr>
						
				   
                      
                    </tbody>
                  </table>
                  
                                  </div>
				
				<?php
	}
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
                        <a data-original-title="View Message" data-toggle="tooltip" type="button" class="btn btn-lg " href="viewmessage.php"><i class="fa fa-envelope fa-lg"></i></a>
                        <span class="pull-right">
                            
							<a data-original-title="Reply" data-toggle="tooltip" href="message.php" class="btn btn-lg " ><span>Reply </span><i class="fa fa-pencil-square-o fa-lg"></i></a>
							<a data-original-title="Remove this message" data-toggle="tooltip" href="oops_query.php?delete_message=1&id=<?php echo $row['id'];?>" class="btn btn-lg" ><i class="fa fa-trash fa-lg"></i></a>
                        </span>
                    </div>
            
          </div>
        </div>
      </div>
    </div>
	</div>
</div>



<?php
include('footer.php');

?>