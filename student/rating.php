<?php
require "connection.php";
session_start();
if($_SESSION==NULL)
{
	header("location:login.php");
}
$aid=$_REQUEST['pid'];
$uid=$_SESSION['email'];
$st=$_REQUEST['status'];
$flag=0;

		$q="select * from rating where post_id='$aid' and email='$uid'";
		$chk=$con->query($q);
		while($r=$chk->fetch_assoc())
		{
			$ratid=$r['rating_id'];
			
			if($r['status']==$st)
			{
				echo "<script>alert('Already Rated You!!!'); window.location='post.php';</script>";
			}
			else
			{
				$x="update rating set status='$st' where post_id='$aid' and email='$uid'";
				if($con->query($x))
				{
					echo "<script>alert('Rating Updated Successfully!!!'); window.location='post.php';</script>";
				}
				else
				{
					echo "hello";
				}
				
			}
			
			$flag=1;
		}
		if($flag==0)
		{
			$z="insert into rating(post_id,email,status)values('$aid','$uid','$st')";
			if($con->query($z))
			{
				echo "<script>alert('Rated Successfully!!!'); window.location='post.php';</script>";
			}
			else
			{
				echo "<script>alert('Try Again!!!'); window.location='post.php';</script>";
			}
		}

?>