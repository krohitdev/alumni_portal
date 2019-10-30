<?php

include('connection.php');
 ?>
<?php
include('header.php');
?>
<body> 
	
	
	<!-- about -->
	<div class="container">
	<div class="about w3-agileits">
		 
			<div class="col-lg-12" height="100px"></div> 
			<div class="col-md-6 about-left">
			
				<h3 class="agileits-title" style="">Welcome <?php $_SESSION['username']; ?>
				<?php echo $_SESSION['username'];?></h3> 
			</div>
			<div class="col-md-4 about-right agileits-w3layoutsleft"> 
			
				<?php
				error_reporting(0);
				$id=$_SESSION['username'];
				$q="select * from registration where username='$id'";
					$chk=$con->query($q);
					while($r=$chk->fetch_assoc())
					{
				?>
				<img src="../gentelella-master/production/alumni_upload/<?php echo $r['email'];?>/<?php echo $r['img'];?>" height="300" width="300" class="img-circle img-responsive" style="box-shadow:1px 1px 10px #00bcd4;" >
				<?php
					}
				?>
			</div> 
			
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //about -->	 
	<?php include('footer.php'); ?>
</body>
</html>