<?php

include_once 'conn.php';
session_start();
$username = $_SESSION['username'];

if (isset($_POST['info_post_submit'])) {

	$data = $_POST['info_text'];
	

	$sql = "UPDATE users SET profile_info = '{$data}' WHERE username = '{$username}' ";
	$run_query = mysqli_query($conn, $sql);

	if (!$run_query) {
		die('infor update failed') . mysqli_error($conn);
	} else {
		echo $data;
	}

}

if (isset($_POST['ptitle_post_submit'])) {
	
	$data = $_POST['edit_ptitle_field'];

	$sql = "UPDATE users SET profile_title = '{$data}' WHERE username = '{$username}' ";
	$run_query = mysqli_query($conn, $sql);

	if (!$run_query) {
		die('infor update failed') . mysqli_error($conn);
	} else {
		echo $data;
	}
}