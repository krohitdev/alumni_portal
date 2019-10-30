<?php
include('../connection.php');


 

 ?>
<?php
include('../header.php');
if($_SESSION==NULL)
{
	header('location:../login.php');
}

if($_SESSION==NULL)
{
	//header('location:login.php');
}
?>
<body> 
	
	
	<!-- about -->
	<div class="container">
	<div class="about w3-agileits">
		 
			
			<div class="col-md-6 about-left">
			
				<h3 class="agileits-title" style="">Welcome <?php $_SESSION['username']; ?>
				<?php echo $_SESSION['username'];?></h3> 
			</div>
			<div class="col-md-4 about-right agileits-w3layoutsleft"> 
			<br/><br/><br/><br/><br/><br/>
				<?php
				error_reporting(0);
				$id=$_SESSION['username'];
				$q="select * from registration where username='$id'";
					$chk=$con->query($q);
					while($r=$chk->fetch_assoc())
					{
				?>
				<img src="../../gentelella-master/production/alumni_upload/<?php echo $r['email'];?>/<?php echo $r['img'];?>" height="300px" width="300px" class="img-circle" style="box-shadow:1px 1px 10px #00bcd4;" >
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