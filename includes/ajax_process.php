<?php 	
	
	include 'conn.php';
	session_start();

	if (isset($_POST['verify_email'])) {

		$username   = $_SESSION['username'];

		$sql0 = "SELECT * FROM verifications WHERE username = '{$username}' ";
		$run_query0 = mysqli_query($conn, $sql0);

		if (!$run_query0) {
			die('query failed') . mysqli_error($conn);
		} else {
			while ( $row = mysqli_fetch_assoc($run_query0) ) {
				$email_verification_status = $row['email_verification_status'];

				if ($email_verification_status == 'verified') {
					echo "Email already has been verified!";
					die();
				}
			}
		}

		$data = $_POST;

		$code		= rand();

		$to_email = $data['verify_email'];
		$subject = 'Email Verification';
		$message = "<p><a href='localhost/id2/includes/verification_notice.php?username=$username&email_code=$code'>Click Here</a> to verify your email on our Network</p>";
		$headers  = 'MIME-Version: 1.0' . "\r\n";
		$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
		$headers .= "From: waqas.saleem7431@gmail.com\r\n"."X-Mailer: php";

		$sql = "INSERT INTO verifications(username, email_verification_status, email_verification_code) VALUES('{$username}', 'pending', '{$code}')";

		$run_query = mysqli_query($conn, $sql);

		if ($run_query) {
			$mail_result = mail($to_email,$subject,$message,$headers);
		} else {
			$mail_result = false;
		}
		

		if ($mail_result) { 

			echo "A verification mail has been sent to you email";
			
		 } else {
			echo "mail not sent";
		}

		// echo $data['verify_email'];

	} 