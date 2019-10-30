
<?php
include('header.php');
if($_SESSION==NULL)
{
	header('location:login.php');
}

require "connection.php";
?>
<div class="container bootstrap snippet">


<div class="col-md-8">
 	
  <div class="box box-widget">
    <div class="box-header with-border">
      <div class="user-block">
	  <br/><br/>
	  <br/><br/>
	  <br/><br/>
		<!--<input type="text" name="usern" value="">-->
	<?php	
	include('oops_query.php');
	$where = array(
			"email"=>$_SESSION['email']
			);
			$result = $obj->select_record("registration",$where);
			
		while($row=mysqli_fetch_array($result))
		{ 
?>
        <img class="img-circle img-responsive" src="../gentelella-master/production/alumni_upload/<?php echo $_SESSION['email']; ?>/<?php echo $row['img']; ?>" alt="User Image" >
		<?php } ?>
        <!--<img class="img-circle" src="images/avatar2.png" alt="User Image">-->
		
        <span class="username"><a href="#"><?php echo $_SESSION['username']; ?></a></span>
        
<!--		<span class="description">-->
	  </div>
  </div>
	<?php
		
			$where = array(
			"post_by"=>$_SESSION['username']
			);
			$result = $obj->select_record("post",$where);
			
		while($row=mysqli_fetch_array($result))
		{ $pid=$row['id']; 
?>
    <div class="box-body" style="display: block;">
	
	
		
      <img class=" " src="../gentelella-master\production\post_images/<?php echo $row['img']; ?>" alt="Photo" height="400" width="400">
       <p><?php echo $row['post']; ?></p>
      <button type="button" class="btn btn-default btn-xs"><i class="fa fa-share"></i> Share</button>
      <a href="rating.php?pid=<?php echo $pid; ?>&status=like">										<span class="fa fa-thumbs-o-up fa-1x fa-lg" style='color:#01a185;'></span>
	  </a>
	  <a href="rating.php?pid=<?php echo $pid; ?>&status=dislike">										<span class="fa fa-thumbs-o-down fa-1x fa-lg" style='color:#01a185;'></span>
	  </a>
	  <?php
		$x="select * from rating where post_id='$pid' and status='like'";
		$chk1=$con->query($x);
		$row=$chk1->num_rows;
		echo $row." likes";
		?>
									</a>
      <span class="pull-right text-muted">127 likes - 3 comments</span>
  	
	</div>
	  <?php
	}

?>
	
	<div class="box-footer box-comments" style="display: block;">
      <div class="box-comment">
        <img class="img-circle img-sm" src="images/avatar2.png" alt="User Image">
        <div class="comment-text">
          <span class="username">
          Maria Gonzales
          <span class="text-muted pull-right">8:03 PM Today</span>
          </span>
          It is a long established fact that a reader will be distracted
          by the readable content of a page when looking at its layout.
        </div>
      </div>
	  


      <div class="box-comment">
        <img class="img-circle img-sm" src="images/avatar3.png" alt="User Image">
        <div class="comment-text">
          <span class="username">
          Luna Stark
          <span class="text-muted pull-right">8:03 PM Today</span>
          </span>
          It is a long established fact that a reader will be distracted
          by the readable content of a page when looking at its layout.
        </div>
      </div>
    </div>
    <div class="box-footer" style="display: block;">
      <form action="#" method="post">
        <img class="img-responsive img-circle img-sm" src="images/avatar1.png" alt="Alt Text">
        <div class="img-push">
          <input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
        </div>
      </form>
    </div>
  </div>
</div>
</div>

<?php

include('footer.php');
?>