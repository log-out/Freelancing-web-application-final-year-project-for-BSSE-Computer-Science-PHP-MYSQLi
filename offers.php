<?php include 'header.php'; ?>
<?php $username = $_SESSION['username']; ?>
<?php if (!is_session_set()) {
	header("Location: login.php");
} ?>

<?php  
	if (isset($_GET['bid_id']) && isset($_GET['accepted'])) {
		$bid_id = $_GET['bid_id'];
		$bid_by_user = $_GET['bid_by_user'];

		$sql3 = "UPDATE bids SET bid_status = 'accepted' WHERE id = '{$bid_id}' ";
		$query3 = mysqli_query($conn, $sql3);
		if ($query3) {
			echo "<div class='alert alert-success alert-dismissable ed_alert'>
			  <a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			   <strong>Hurrah!</strong> Congrats, You have accepted the <code>$bid_by_user</code> Bid. Track your order now <a href='orders.php'> HERE</a>.
			</div>"	;
}
}?>

<?php  
	if (isset($_GET['bid_id']) && isset($_GET['rejected'])) {
		$bid_id = $_GET['bid_id'];
		$bid_by_user = $_GET['bid_by_user'];

		$sql3 = "UPDATE bids SET bid_status = 'rejected' WHERE id = '{$bid_id}' ";
		$query3 = mysqli_query($conn, $sql3);
		if ($query3) {
			echo "<div class='alert alert-success alert-dismissable ed_alert'>
			  <a href='#'' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
			   <strong>Success!</strong> You have rejected the <code>$bid_by_user</code> Bid.</a>.
			</div>"	;
}
}?>

<div class="container">

<h2>Offers</h2>

<div class="offers">

<?php  
	$sql = "SELECT * FROM bids WHERE bid_by_username != '{$username}' AND bid_status = 'pending'";
	$query = mysqli_query($conn, $sql);
	while ($row = mysqli_fetch_assoc($query)) { 
		$db_user = $row['bid_by_username'];
		$bid_id = $row['id'];
		$job_posted_by = $row['job_posted_by'];
		$bid_request_id = $row['bid_request_id'];
		?>
		
	 <div class="row row_striped job_row">
		<div class="offer-details">
			<div class="col-sm-2">
			<div class="offer-image">
<?php  
	$sql2 = "SELECT profileimage FROM users WHERE username = '{$db_user}' ";
	$query2 = mysqli_query($conn, $sql2);
	$row2 = mysqli_fetch_assoc($query2);


?>


			<img src="assets/images/profile_images/<?= $row2['profileimage'] ?>" class="img-responsive">
			<!-- <a href="chat.php" class="btn btn-md custom-button-2">Contact</a>	 -->
			</div><!-- offer image -->

		</div>
		<div class="col-sm-10">
			<div class="offer-content">
				<div class="pull-left">
					<h3 class="title"><?= $row['bid_niche_title']; ?></h3>
					<p class="job_desc">
		                <strong>Est. Time: </strong> <span><?= $row['bid_day']; ?> days |</span> 
		                <strong>Budget: </strong> <span>$<?= $row['bid_price']; ?></span>
		           </p>
				</div>
				<div class="pull-right">
					<a href="offers.php?bid_id=<?= $bid_id; ?>&bid_by_user=<?= $db_user; ?>&job_posted_by=<?= $job_posted_by; ?>&accepted=true" class="btn btn-primary">Accept</a>

					<a href="chat.php?user=<?= $row['bid_by_username'] ?>" class="btn btn-info">Message Now</a>

					<a href="offers.php?bid_id=<?= $bid_id; ?>&bid_by_user=<?= $db_user; ?>&job_posted_by=<?= $job_posted_by; ?>&rejected=true" class="btn btn-danger">Reject</a>
				</div>
				<div class="clearfix"></div>
				
		           <p class="job_detail">
		           	<?= $row['bid_desc']; ?>
		           </p>
			</div>
		</div>
		</div>
	</div><!-- offer details -->

	<?php } ?>



</div><!-- offers -->

 </div>

<?php include 'footer.php'; ?>