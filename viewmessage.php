<?php
include('header.php');
if($_SESSION==NULL)
{
	header('location:login.php');
}


?>


<div class="container">
        <div class="right_col" role="main">
          <!-- top tiles -->
					  <div class="">
					  <<br><br><br><br><br><br>
					  <a href="viewmessage.php"><h3 class="text-center"><span class="fa fa-envelope-o "></span> View Message</h3></a></div>
		<br/>
        <div class="row">
			<div class="col-md-12 col-sm-6 col-xs-12">
				<div class="x_panel">
                  
                   
                  </div>
                  <div class="x_content">
                    <table class="table table-hover" >
                      <thead>
                        <tr>
                         
                          <th>Sender</th>
                          <th>Subject</th>
                          <th>Message</th>
                          <th>Time</th>
                          <th>Delete</th>
                          <th>View</th>
                        </tr>
						 <?php
include('oops_query.php');


if(isset($_SESSION["email"]) && isset($_SESSION["password"]) )
{
		$receiver=$_SESSION["email"];
		$where = array(
		"send_to"=>$receiver
		);
		$result = $obj->select_record("message",$where);
		while($row=mysqli_fetch_array($result)){
		//$rowcount=mysqli_num_rows($result);
		//printf("Result set has %d rows.\n",$rowcount);
		$status=$row['status'];
		if($status=="yes")
		{
		?>
		
        <tr>
        	<td><?php echo $row['sender'];?></td>
            <td><?php echo $row['subject'];?></td>
            <td><?php echo $row['message'];?></td>
            <td><?php echo $row['sending_time'];?></td>
           
            <td><a href="oops_query.php?delete_message=1&id=<?php echo $row['id'];?>" class="col-md-5 btn btn-sm btn-danger"><i class="fa fa-trash-o fa-lg"></i></a></td>
            
            <td><a href="viewfullmessage.php?view=1&id=<?php echo $row['id'];?>" class="col-md-7 btn btn-sm btn-success" ><i class="fa fa-user fa-lg"></i></a></td>
        </tr>
        
		<?php
		}
		else
		{
		?>
		 <tr class="bg-info">
        	<td><?php echo $row['sender'];?></td>
            <td><?php echo $row['subject'];?></td>
            <td><?php echo $row['message'];?></td>
            <td><?php echo $row['sending_time'];?></td>

            <td><a href="oops_query.php?delete_admin=1&id=<?php echo $row['id'];?>" class="col-md-5 btn btn-sm btn-danger" ><i class="fa fa-trash-o fa-lg"></i></a></td>

            <td><a href="viewfullmessage.php?view=1&id=<?php echo $row['id'];?>" class="col-md-7 btn btn-sm btn-success" ><i class="fa fa-user fa-lg"></i></a></td>
        </tr>
		<?php
		}
	}
}
?>

                                           
                    </table>

                  </div>
                </div>
              </div>


              
              
							
						
              </div>
            </div>
		</div>

        <!-- /page content -->
       <?php
    include('footer.php');


?>