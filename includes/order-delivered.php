<?php include 'conn.php';
session_start();
$username = $_SESSION['username']; 

if (isset($_POST['deliver_submit'])) {
	$order_attachment 		= $_FILES['order_attachment']['name'];
	$order_attachment_temp 	= $_FILES['order_attachment']['tmp_name'];

	$order_id				= $_POST['order_id'];
	$order_bid_by_username	= $_POST['order_bid_by_username'];
	$order_job_posted_by	= $_POST['order_job_posted_by'];
	$order_bid_request_id	= $_POST['order_bid_request_id'];
	$order_bid_niche_title	= $_POST['order_bid_niche_title'];
	$order_price			= $_POST['order_price'];
	$order_bid_niche_id		= $_POST['order_bid_niche_id'];
	$order_bid_desc			= $_POST['order_bid_desc'];
	$order_started_date		= $_POST['order_started_date'];
	$oder_deliver_desc		= $_POST['oder_deliver_desc'];

	$order_attachment_array	= explode('.', $_FILES['order_attachment']['name']);
	$order_attachment_ext	= end($order_attachment_array);

	$rename_order_attch 	= 'order_attach_' . $username . '_' . time() . '.' . $order_attachment_ext;

	// Move uploaded file to server
	move_uploaded_file($order_attachment_temp, "../assets/images/order_images/$rename_order_attch");

	$sql = "INSERT INTO orders(order_id, order_bid_by_username, order_job_posted_by, order_bid_request_id, order_bid_niche_title, 	order_price, order_bid_niche_id, order_bid_desc, oder_deliver_desc, 	order_started_date, order_status) VALUES('{$order_id}', '{$order_bid_by_username}','{$order_job_posted_by}', '{$order_bid_request_id}', '{$order_bid_niche_title}', '{$order_price}', '{$order_bid_niche_id}', '{$order_bid_desc}', '{$oder_deliver_desc}', '{$order_started_date}', 'delivered' )";

	$query = mysqli_query($conn, $sql);

	if ($query) {
		echo "<div class='alert alert-success alert-dismissable ed_alert'>
			  <a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			   <strong>Success!</strong> Your order has been delivered successfully. <a href='../orders.php'> click here </a> to go back.
			</div>"	;
	} else {
		echo "order could not deliver.";
	}


}



?>