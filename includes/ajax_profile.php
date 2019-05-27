<?php

include_once 'conn.php';
session_start();

if (isset($_POST['info_post_submit'])) {

	$data = $_POST['info_text'];
	$username = $_SESSION['username'];

	$sql = "UPDATE users SET profile_info = '{$data}' WHERE username = '{$username}' ";
	$run_query = mysqli_query($conn, $sql);

	if (!$run_query) {
		die('infor update failed') . mysqli_error($conn);
	} else {
		echo $data;
	}

}