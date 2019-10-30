<?php
$conn=mysqli_connect("localhost","root","","march");
if(!$conn)
{
	die('not Connected'.mysqli_error($conn));
}
?>