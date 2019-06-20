<?php  

include 'conn.php';

	if (isset($_GET['unverify']) && isset($_GET['userid'])) {
		
		$userid = $_GET['userid'];

		$sql = "UPDATE users SET profile_status = 'pending' WHERE id = '{$userid}'";

		$query = mysqli_query($conn, $sql);
		if (!$query) {
			die() . mysqli_error($conn);
		} else {
			header("Location: ../users.php");
		}


	} elseif (isset($_GET['verify']) && isset($_GET['userid'])) {

		$userid = $_GET['userid'];

		$sql = "UPDATE users SET profile_status = 'verified' WHERE id = '{$userid}'";

		$query = mysqli_query($conn, $sql);
		if (!$query) {
			die() . mysqli_error($conn);
		} else {
			header("Location: ../users.php");
		}

	} elseif (isset($_GET['delete']) && isset($_GET['userid'])) {

		$userid = $_GET['userid'];

		$sql = "DELETE FROM users WHERE id = '{$userid}'";

		$query = mysqli_query($conn, $sql);
		if (!$query) {
			die() . mysqli_error($conn);
		} else {
			header("Location: ../users.php");
		}

	}



?>