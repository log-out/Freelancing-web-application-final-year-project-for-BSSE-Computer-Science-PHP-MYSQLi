<?php

include 'conn.php';
session_start();

if (isset($_POST['phone_btn_submit'])) {
		
		$username   = $_SESSION['username'];

		$sql0 = "SELECT * FROM verifications WHERE username = '{$username}' ";
		$run_query0 = mysqli_query($conn, $sql0);

		if (!$run_query0) {
			die('query failed') . mysqli_error($conn);
		} else {
			while ( $row = mysqli_fetch_assoc($run_query0) ) {
				$phone_verification_status = $row['phone_verification_status'];

				if ($phone_verification_status == 'verified') {
					echo "Phone already has been verified!";
					die();
				}
			}
		}

		$data = $_POST;

		$code		= rand(1111, 9999);

		$sid = 'ACf3e406ef66f222ff5b8633b5a9ad88dc';
		$token = '9b702c7895e7f73e1c4ca69e10137d8c';
		$twilio_number = "+13212443618";
		$msg = "Your verification code is: " . $code;

		$sql = "UPDATE verifications SET phone_verification_status = 'pending', phone_verification_code = '{$code}' WHERE username = '{$username}'";


		$run_query = mysqli_query($conn, $sql);

		if ($run_query) {
			
			require 'vendor/autoload.php';
			// use Twilio\Rest\Client;

			$client = new Twilio\Rest\Client($sid, $token);
			// $client = new Client($sid, $token);

			$client->messages->create(
			    // Where to send a text message (your cell phone?)
			    $_POST['verify_phone'],
			    array(
			        'from' => $twilio_number,
			        'body' => $msg
			    )
			);

			echo "sent";

		} else {
			echo "Message not sent";
		}

		// echo $data['verify_email'];

	}

	if (isset($_POST['phone_code_submit'])) {
		
		$username   = $_SESSION['username'];
		$phone_code = $_POST['phone_code'];

		$sql = "SELECT * FROM verifications WHERE username = '{$username}' ";

		$run_query = mysqli_query($conn, $sql);

		if (!$run_query) {
			die() . mysqli_error($conn);
		} else {
			while ( $row = mysqli_fetch_assoc( $run_query ) ) {
				$db_phone_code = $row['phone_verification_code'];

				if ( $phone_code == $db_phone_code ) {
					
					$sql2 = "UPDATE verifications SET phone_verification_status = 'verified' WHERE username = '{$username}' AND phone_verification_code = '{$phone_code}' ";

					$run_query2 = mysqli_query( $conn, $sql2 );
					if (!$run_query2) {
						die('verification failed ') . mysqli_error($conn);
					} else {

						echo "Phone number has been verified successfully.";

					}

				}
			}
		}


	}