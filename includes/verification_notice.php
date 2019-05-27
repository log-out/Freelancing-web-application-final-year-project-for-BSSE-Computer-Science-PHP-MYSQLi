<?php  
	
	include 'conn.php';

	if (isset($_GET['username']) && isset($_GET['email_code'])) {
		
		$username 	= $_GET['username'];
		$email_code		= $_GET['email_code'];

		$sql = "SELECT * FROM verifications WHERE username = '{$username}' AND email_verification_code = '{$email_code}' ";

		$run_query = mysqli_query($conn, $sql);

		if (!$run_query) {
			die() . mysqli_error($conn);
		} else {
			while ( $row = mysqli_fetch_assoc($run_query) ) {

				$db_username 	= $row['username'];
				$db_email_code 	= $row['email_verification_code'];

				if ($username == $db_username && $email_code == $db_email_code) {
					
					$sql2 = "UPDATE verifications SET email_verification_status = 'verified' WHERE username = '{$username}' AND email_verification_code = '{$email_code}' ";

					$run_query2 = mysqli_query($conn, $sql2);

					if (!$run_query2) {
						die('verification failed') . mysqli_error($conn);
					} else {
						echo "<p style='margin: 50px auto; text-align: center; display: block; width: 50%; padding: 40px; background-color: #d2b175; color: #fff; border-radius: 4px; font-size: 30px;'>Your email has been verified successfully.</p>";
					}


				}
			}
		}


	}


