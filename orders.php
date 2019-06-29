<?php include 'header.php'; ?>
<?php $username = $_SESSION['username']; ?>

<div class="container">

<?php  
	$sql = "SELECT * FROM orders WHERE order_job_posted_by = '{$username}' AND order_status = 'delivered' ";
	$query = mysqli_query($conn, $sql);
	if ($query) {
		while ($row = mysqli_fetch_assoc($query)) { ?>


	<div class="row">
		<div class="order-title">
			<h2>Notifications</h2>
		</div>
		<div class="order-body">
			<div class="well">
				<div class="pull-left">
				<h3><a href="my_profile.php?user=<?= $row['order_bid_by_username'] ?>"><?= $row['order_bid_by_username'] ?></a> just delivered your order</h3>

				<p class="job_desc">
	                <strong>Started Date: </strong> <span><?= $row['order_started_date']; ?> |</span> 
	                <strong>Deliver Date: </strong> <span><?= $row['order_deliver_date']; ?> |</span>
	                <strong>Budget: </strong> <span>$<?= $row['order_price']; ?></span>
	                <!-- <strong>Purposals: </strong> <span>7</span> -->
	           </p>
	           </div>
	           <div class="pull-right">
	           		<a href="#"  data-toggle="modal" data-target="#order_<?= $row['id']; ?>" class="btn btn-info">Accept Delivery</a>


    <div id="order_<?= $row['id']; ?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Deliver Job</h4>
      </div>
      <div class="modal-body">
        <form method="get" action="includes/accept-delivery.php">
        	<label for="">Number of star you would like to give?</label>
        	<select name="stars" id="" class="form-control">
        		<option value="1">1</option>
        		<option value="2">2</option>
        		<option value="3">3</option>
        		<option value="4">4</option>
        		<option value="5">5</option>
        	</select>
        	<input type="hidden" name="order_id" value="<?= $row['id']; ?>">
        	<input type="hidden" name="order_bid_by_username" value="<?= $row['order_bid_by_username']; ?>">
        	<input type="hidden" name="job_id" value="<?= $row['order_bid_request_id']; ?>">
        	<input type="hidden" name="order_price" value="<?= $row['order_price']; ?>">
    		
			<input type="submit" name="accepted_submit" value="Submit" class="btn btn-md custom-button-2">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>



	           </div>
				<div class="clearfix"></div>
	           <p class="job_detail">
	                <?= $row['oder_deliver_desc']; ?>
	           </p>

			</div>
		</div>
	</div>
			


	<?php	}
	}

?>	
</div>

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
							<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#<?= $row['id'] ?>_deliver">Deliver Now</a>	
							<a href="#" class="btn btn-danger">Cancel</a>


	<!-- Modal -->
	<div id="<?= $row['id'] ?>_deliver" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Deliver Job</h4>
	      </div>
	      <div class="modal-body">
    <form enctype="multipart/form-data" action="includes/order-delivered.php" method="post">
    	<label class="custom-file-upload">
		<input type="file"/ name="order_attachment">
		<i class="fa fa-upload"></i> Upload work
		</label>
		<input type="hidden" name="order_id" value="<?= $row['id']; ?>">
		<input type="hidden" name="order_bid_by_username" value="<?= $row['bid_by_username']; ?>">
		<input type="hidden" name="order_job_posted_by" value="<?= $row['job_posted_by']; ?>">
		<input type="hidden" name="order_bid_request_id" value="<?= $row['bid_request_id']; ?>">
		<input type="hidden" name="order_bid_niche_title" value="<?= $row['bid_niche_title']; ?>">
		<input type="hidden" name="order_price" value="<?= $row['bid_price']; ?>">
		<input type="hidden" name="order_bid_niche_id" value="<?= $row['bid_niche']; ?>">
		<input type="hidden" name="order_bid_desc" value="<?= $row['bid_desc']; ?>">
		<input type="hidden" name="order_started_date" value="<?= $row['date']; ?>">
		<textarea class="form-control" name="oder_deliver_desc" placeholder="Enter Job details here..."></textarea>
		<input type="submit" name="deliver_submit" value="Deliver Job" class="btn btn-md custom-button-2">
    </form>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div>

	  </div>
	</div>
	<!-- /Modal -->



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
							<a href="#" class="btn btn-primary">Cancel</a>

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