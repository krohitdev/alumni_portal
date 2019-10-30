<?php
include('connection.php');
$un=$_POST['un'];
$ps=$_POST['password'];
$email=$_POST['email'];
$dob=$_POST['dob'];
$address=$_POST['address'];
$city=$_POST['city'];
$class=$_POST['class'];
$session=$_POST['session'];
if(isset($_POST['submit']))
{
$sql="insert into registration(username,password,email,dob,address,city,class,session) values('$un','$ps','$email','$dob','$address','$city','$class','$session')";
$result=mysqli_query($conn,$sql);

if(!$result)
	{
		mysqli_error($conn);
	}
	else
	{
		echo "1 record add";
	}
}	
?>