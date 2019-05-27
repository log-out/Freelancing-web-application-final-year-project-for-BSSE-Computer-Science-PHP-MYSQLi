<?php  

	session_start();
	session_unset();
	$_SESSION['username'] = "";
	$_SESSION['email'] = "";
	session_destroy();

	header("location:login.php");




?>