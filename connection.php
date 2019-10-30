<?php
$con=new mysqli('localhost','root','','alumni');
if($con->connect_error)
{
	echo "not connected";
}
else
{
	echo "connected";
}






?>