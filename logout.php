<?php
session_start();
session_destroy();

unset($_SESSION['password']);
header('location:login.php');



?>