<?php  
	include 'conn.php';
	session_start();
	$username = $_SESSION['username'];

	$sql = "SELECT * FROM chat";
	$query = mysqli_query($conn, $sql);

	while ($row = mysqli_fetch_assoc($query)) {
		echo $row['message'];
	}



?>