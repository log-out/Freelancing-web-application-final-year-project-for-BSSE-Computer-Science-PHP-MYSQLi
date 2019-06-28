<?php include 'header.php'; ?>
<?php $username = $_SESSION['username']; ?>

<div class="container">
<div class="order-title">
	<h2>My Orders</h2>
</div>

<div class="order-body">
<?php  

	$sql = "SELECT * FROM bids WHERE bid_by_username = '{$username}' AND bid_status = 'accepted' ORDER BY bid_day ASC ";
	$query = mysqli_query($conn, $sql);
	if ($query) {
		if (mysqli_num_rows($query) == 0) {
			echo "No Order Found!";
		} else {

		while ($row = mysqli_fetch_assoc($query)) { ?>


			<div class="row row_striped job_row">
				<div class="col-lg-10">
					<div class="pull-left">
							<h3 class="title"><?= $row['bid_niche_title']; ?></h3>
							<p class="job_desc">
				                <strong>Est. Time: </strong> <span><?= $row['bid_day']; ?> |</span> 
				                <strong>Budget: </strong> <span>$<?= $row['bid_price']; ?> |</span>
				                <strong>Job Posted By: </strong> <a href="my_profile.php?user=<?= $row['job_posted_by']; ?>"><span><?= $row['job_posted_by']; ?></span></a>
				           </p>
						</div>
						<div class="pull-right">
							<!-- <a href="#" class="btn btn-primary">Send Requirements</a>	 -->
						</div>
						<div class="clearfix"></div>
						<p class="job_detail">
				           	<?= $row['bid_desc']; ?>
				        </p>
				</div>
				<div class="col-lg-2">
					<h2 class="text-center">Budget<br><small>$</small><?= $row['bid_price']; ?></h2>
				</div>
			</div>


	<?php	}
}
	}

?>
</div>


	
</div>


<div class="container">

<hr>

<div class="order-title">
	<h2>My Request</h2>
</div>
<div class="order-body">

<?php  

	$sql = "SELECT * FROM bids WHERE job_posted_by = '{$username}' AND bid_status = 'accepted' ORDER BY bid_day ASC ";
	$query = mysqli_query($conn, $sql);
	if ($query) {
		if (mysqli_num_rows($query) == 0) {
			echo "No Order Found!";
		} else {

		while ($row = mysqli_fetch_assoc($query)) { ?>


			<div class="row row_striped job_row">
				<div class="col-lg-10">
					<div class="pull-left">
							<h3 class="title"><?= $row['bid_niche_title']; ?></h3>
							<p class="job_desc">
				                <strong>Est. Time: </strong> <span><?= $row['bid_day']; ?> |</span> 
				                <strong>Budget: </strong> <span>$<?= $row['bid_price']; ?> |</span>
				                <strong>Job Accepted By: </strong> <a href="my_profile.php?user=<?= $row['bid_by_username']; ?>"><span><?= $row['bid_by_username']; ?></span></a>
				           </p>
						</div>
						<div class="pull-right">
							<!-- <a href="#" class="btn btn-primary">Send Requirements</a>	 -->
						</div>
						<div class="clearfix"></div>
						<p class="job_detail">
				           	<?= $row['bid_desc']; ?>
				        </p>
				</div>
				<div class="col-lg-2">
					<h2 class="text-center">Budget<br><small>$</small><?= $row['bid_price']; ?></h2>
				</div>
			</div>


	<?php	}
}
	}

?>
</div>

</div>





<?php include 'footer.php'; ?>