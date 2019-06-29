<?php  

include 'conn.php';

session_start();
$username = $_SESSION['username'];

	if (isset($_POST['txt_submit'])) {
		$message = $_POST['txt_message'];
		$send_to = $_POST['user'];

		$sql = "INSERT INTO chat(username, send_to, send_by, message_by) VALUES('{$username}', '{$send_to}', '{$username}', '{$message}') ";

		$query = mysqli_query($conn, $sql);

		if ($query) {
			$sql2 = "SELECT * FROM chat";
			$query2 = mysqli_query($conn, $sql2);
			while ($row = mysqli_fetch_assoc($query2)) { 

				echo "<div class='row message-body'>
				  <div class='col-sm-12 message-main-receiver'>
				    <div class='receiver'>
				      <div class='' id=''>
				       $row[message_by]
				      </div>
				      <span class='message-time pull-right'>
				        $row[date]
				      </span>
				    </div>
				  </div>
				</div>";
				
			 }

		}

	}


?>