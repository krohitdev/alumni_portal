
<?php
$username=$_POST['username'];
$password=$_POST['password'];
session_start();
$_SESSION['username']=$username;
$_SESSION['password']=$password;

echo $_SESSION['username']."<br>"; 
echo $_SESSION['password'];
echo "<br><a href=viewsession.php>View Session</a><br>";
echo "<a href=logout.php>Logout</a>";
?>