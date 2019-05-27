<?php  
	include 'conn.php';
	session_start();
	
	if (isset($_POST['verify_submit'])) {
		
		$fname 			= mysqli_real_escape_string($conn, $_POST['fname']);	
		$lname 			= mysqli_real_escape_string($conn, $_POST['lname']);	
		$skills 		= mysqli_real_escape_string($conn, $_POST['skills']);	
		$cname 			= mysqli_real_escape_string($conn, $_POST['cname']);	
		$cimage 		= $_FILES['cimage']['name'];
		$cimage_temp 	= $_FILES['cimage']['tmp_name'];
		$skills			= mysqli_real_escape_string($conn, $_POST['skills']);	
		$security_q		= mysqli_real_escape_string($conn, $_POST['security_q']);	
		$security_a		= mysqli_real_escape_string($conn, $_POST['security_a']);	
		$phone			= mysqli_real_escape_string($conn, $_POST['phone']);	
		$pimage 		= $_FILES['pimage']['name'];
		$pimage_temp 	= $_FILES['pimage']['tmp_name'];

		$username 		= $_SESSION['username'];

		$cname_array	= explode('.', $_FILES['cimage']['name']);
		$cname_ext		= end($cname_array);
		$pname_array	= explode('.', $_FILES['pimage']['name']);
		$pname_ext		= end($pname_array);

		$rename_cimage 	= 'certificate_' . $username . '_' . time() . '.' . $cname_ext;
		$rename_pimage 	= 'profile_' . $username . '_' . time() . '.' . $pname_ext;

		// Move uploaded file to server
		move_uploaded_file($cimage_temp, "../assets/images/certificate_images/$rename_cimage");
		move_uploaded_file($pimage_temp , "../assets/images/profile_images/$rename_pimage");

		$sql = "UPDATE users SET
			    fname = '{$fname}',
			    lname = '{$lname}',
			    phone = '{$phone}',
			    skills= '{$skills}',
			    certificatename  = '{$cname}',
			    certificateimage = '{$rename_cimage}',
			    securityquestion = '{$security_q}',
			    security_answer  = '{$security_a}',
			    profileimage 	 = '{$rename_pimage}'
			    WHERE username = '{$username }' ";

		$run_query = mysqli_query($conn, $sql);

		if (!$run_query) {
			die('record not updated ') . mysqli_error($conn);
		} else {
			echo "<p style='margin: 50px auto; text-align: center; display: block; width: 50%; padding: 40px; background-color: #d2b175; color: #fff; border-radius: 4px; font-size: 30px;'>Your profile has been submited for verification. <a href='../my_profile.php'>Click here</a> to visit your profile</p>";
		}


		


	}



?>