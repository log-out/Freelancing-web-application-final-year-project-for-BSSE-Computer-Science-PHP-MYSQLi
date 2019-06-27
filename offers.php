<?php include 'header.php'; ?>
<?php $username = $_SESSION['username']; ?>
<?php if (!is_session_set()) {
	header("Location: login.php");
} ?>

<div class="container">

<h2>Offers</h2>

<div class="offers">

<?php  
	$sql = "SELECT * FROM bids WHERE username = '{$username}'";
	$query = mysqli_query($conn, $sql);
	while ($row = mysqli_fetch_assoc($query)) { 
		$db_user = $row['username'];
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
		                <strong>Est. Time: </strong> <span><?= $row['bid_day']; ?></span> 
		                <strong>Budget: </strong> <span><?= $row['bid_price']; ?></span>
		           </p>
				</div>
				<div class="pull-right">
					<a href="#" class="btn btn-primary">Accept</a>
					<a href="#" class="btn btn-danger">Reject</a>
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