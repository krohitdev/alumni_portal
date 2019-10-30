
<?php
session_start();
if($_SESSION==NULL)
{
	header('location:../login.php');
}


include('header_student.php');

require "../connection.php";
?>
<br><br><br><br><br><br><br><br><br><br><br><br><br>
<div class="container bootstrap snippet">


 	
  
    <div class="col-lg-4">
      <?php
		include('../oops_query.php');
			$result = $obj->fetch_record("post");
			
		while($row=mysqli_fetch_array($result))
		{ $pid=$row['id']; 
?>
	  <div style="float:left;">
	  
		<!--<input type="text" name="usern" value="">-->
		  
		<img class="img-circle user-block" src="../../gentelella-master/production/student_upload/<?php echo $_SESSION['username']; ?>/<?php echo $_SESSION['username'] ?>" alt="User Image"  width="304" height="236">
        <!--<img class="img-circle" src="images/avatar2.png" alt="User Image">-->
		<span class="username" style="font-size:24px"><?php echo $_SESSION['username']; ?></a></span>
<!--		<span class="description">-->
		<span class="pull-left" style="font-size:24px;padding-left:23.6%;">
		<button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
		<a href="rating.php">	<span class="fa fa-thumbs-o-up fa-1x fa-lg" style='color:#01a185;'></span>
		</a>
		<a href="rating.php"><span class="fa fa-thumbs-o-down fa-1x fa-lg" style='color:#01a185;'></span>
		</a>
		</span>
		</h3><br><br>
    	 <p><?php echo $row['post']; ?></p>
		 <br/>
      
	<img class=" img-responsive col-lg-6" src="../../gentelella-master\production\post_images/<?php echo $row['img']; ?>" alt="Photo" height="50%" width="100%" style="padding-bottom:5%;">
     <!-- <p>
    
	 <span class="pull-right text-muted">127 likes - 3 comments</span>
  	</p>-->
	 
	<br><br>	
		
	<!--<div class="box-footer box-comments" style="display: block;">
      <div class="box-comment">
        <img class="img-circle img-sm" src="../images/avatar2.png" alt="User Image">
        <div class="comment-text">
          <span class="username">
          Maria Gonzales
          <span class="text-muted pull-right">8:03 PM Today</span>
          </span>
          It is a long established fact that a reader will be distracted
          by the readable content of a page when looking at its layout.
        </div>
      </div>
	</div>-->
	 <?php
	}

?>  
</div>
  </div>  


      
    
    <div class="box-footer" style="display: block;">
      <form action="#" method="post">
        <div class="img-push">
          <input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
        </div>
      </form>
    </div>
  </div>
  </div>
	
</div>
</div>


<?php

include('../footer.php');
?>