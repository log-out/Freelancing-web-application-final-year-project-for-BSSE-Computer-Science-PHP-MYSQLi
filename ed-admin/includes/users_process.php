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

	} elseif (isset($_POST['submit_notice'])) {
		
		echo $notice_text = $_POST['notice_text'];
		echo $user_id     = $_POST['user_id'];
		echo $email     = $_POST['email'];

		$sql = "SELECT email FROM users WHERE id = '{$user_id}' ";

		$query = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($query);
		echo $email = $row['email'];
die();
		$to_email = $email;
		$subject = 'Email FROM FYP';
		$message = $notice_text;
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From: waqas.saleem7431@gmail.com\r\n"."X-Mailer: php";

		$mail_result = mail($to_email,$subject,$message,$headers);
		if ($mail_result) {
			header("Location: ../users.php");
		} else {
			echo "Mail not sent";
		}


	}



?>