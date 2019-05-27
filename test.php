<?php

if (isset($_POST['submit'])) {
	

	// Authorisation details.
	$username = "waqas.saleem7431@gmail.com";
	$hash = "4e0b9aa3ebb7975ea59094a85603c5f6493b070676ba41751dd308d8d3d58807";

	// Config variables. Consult http://api.txtlocal.com/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "API Test"; // This is who the message appears to be from.
	$numbers = $_POST['number']; // A single number or a comma-seperated list of numbers
	$message = "This is a test message from the PHP API script.";
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.txtlocal.com/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
	echo $result;


}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>send sms</title>
</head>
<body>

	<form action="test.php" method="post">
		<table align="center">
			<tr>
				<td>username:</td>
				<td><input type="text" name="username" placeholder="enter your username"></td>
			</tr>

			<tr>
				<td>hash:</td>
				<td><input type="text" name="hash" placeholder="enter your hash key"></td>
			</tr>

			<tr>
				<td>sender:</td>
				<td><input type="text" name="sender" placeholder="enter your sender"></td>
			</tr>

			<tr>
				<td>number:</td>
				<td><input type="text" name="number" placeholder="enter your number"></td>
			</tr>

			<tr>
				<td>message:</td>
				<td><input type="text" name="message" placeholder="enter your message"></td>
			</tr>

			<tr>
				<td>submit:</td>
				<td><input type="submit" name="submit" value="send"></td>
			</tr>
		</table>
	</form>
	
</body>
</html>