<?php  
include 'conn.php';
session_start();
$username = $_SESSION['username'];

	if (isset($_GET['accepted_submit'])) {

		$order_id = $_GET['order_id'];
		$rewarded_username = $_GET['order_bid_by_username'];
		$job_id = $_GET['job_id'];
		$stars = $_GET['stars'];
		$order_price = $_GET['order_price'];

		// update order table
		$sql = "UPDATE orders SET order_status = 'over' WHERE id = '{$order_id}' ";

		$query = mysqli_query($conn, $sql);

		// update bids table
		$sql4 = "UPDATE bids SET bid_status = 'over' WHERE bid_request_id = '{$job_id}' ";
		$query4 = mysqli_query($conn, $sql4);



		// update jobs table
		$sql2 = "UPDATE jobs SET job_status = 'over' WHERE id = '{$job_id}' ";
		$query2 = mysqli_query($conn, $sql2);

		// update user table
		$slq3 = "UPDATE users SET total_order_completed = total_order_completed + 1, success_score = 100, deliver_on_time = 100, order_completetion = 100, balance = balance + '{$order_price}', rating = '{$stars}' WHERE username = '{$rewarded_username}'";

		$query3 = mysqli_query($conn, $slq3);

		if ($query3) {
			header("Location: ../orders.php");
		}


	}



?>