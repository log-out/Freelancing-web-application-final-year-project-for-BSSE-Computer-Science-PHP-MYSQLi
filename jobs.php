<?php include 'header.php'; 
$username = $_SESSION['username'];

?>

<?php  
	if (isset($_POST['bid_submit'])) {

		$bid_niche 		= $_POST['niche_id'];
		$bid_price	 	= $_POST['bid_price'];
		$bid_days 		= $_POST['bid_days'];
		$bid_desc 		= $_POST['bid_desc'];
		$bid_request_id = $_POST['bid_request_id'];


		$sql = "INSERT INTO bids(username, bid_request_id, bid_niche, bid_price, bid_day, bid_desc) VALUES('{$username}', '{$bid_request_id}', '{$bid_niche}', '{$bid_price}', '{$bid_days}', '{$bid_desc}' )";

		$query = mysqli_query($conn, $sql);
		if ($query) { ?>
			<div class="alert alert-success alert-dismissable ed_alert">
			  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			   <strong>Success!</strong> Your bid has been submitted successfully.
			</div>
		<?php } 
	}




?>

	<?php  
		$niche_array = array();
		$username = $_SESSION['username'];
		$sql = "SELECT * FROM gig_data WHERE username = '{$username}' ";
		$query = mysqli_query($conn, $sql);
		while ( $row = mysqli_fetch_assoc( $query ) ) { 
			
			$niche_array[] = $row;
			
	} ?> 



<div class="container">
	<h2 class="job_feed_title">Jobs</h2>

<?php  
	


	$sql = "SELECT * FROM jobs ORDER BY id DESC";

	$query = mysqli_query($conn, $sql);
	while ( $row = mysqli_fetch_assoc( $query ) ) { 
		$job_id = $row['id']; ?>
		
	<div class="row row_striped job_row">
	      <div class="job_title pull-left">
	           <h3><?= $row['job_title']; ?></h3>
	      </div>
	      <div class="pull-right">
	
	<?php  
		$sql2 = "SELECT * FROM bids WHERE username = '{$username}' AND bid_request_id = '{$job_id}' ";
		$query2 = mysqli_query($conn, $sql2);

		$num_rows = mysqli_num_rows($query2);

		if ($num_rows >= 1) { 
			echo "<input type='submit' disabled='' class='btn btn-info' value='Bid Now'>";
		} elseif ($num_rows == 0) { ?>
			<a href='#' class='btn btn-info' data-toggle='modal' data-target='#bidNow_<?= $row['id'] ?>'>Bid Now</a>
		<?php } ?>


	      </div>
	      <div class="clearfix"></div>


       	<!-- Modal -->
	      <div id="bidNow_<?= $row['id'] ?>" class="modal fade ed_modal" role="dialog">
	        <div class="modal-dialog">

	          <!-- Modal content-->
	          <div class="modal-content">
	            <div class="modal-header">
	              <button type="button" class="close" data-dismiss="modal">&times;</button>
	              <h4 class="modal-title"><?= $row['job_title']; ?></h4>
	            </div>
	            <div class="modal-body">

	            	<div class="row">
	            		<div class="col-lg-12">
	            			<div class="well">
	            				<p><?= $row['job_desc']; ?></p>
	            			</div>
	            		</div>
	            	</div>

	            	<div class="row">
	            		<div class="col-lg-12">
	            		<form action="" method="post">
	            			<div class="form-group">
	            				<label for="" class="">Select Niche</label>
	            				<select class="form-control" name="niche_id" id="">

    <?php foreach ($niche_array as $value): ?>

    	<option value="<?= $value['id']; ?>"><?= $value['niche_title']; ?></option>
    	
    <?php endforeach ?>
	            					
	            				</select>
							</div>
							<div class="form-group">
	            				<label for="" class="">Price</label>
	            				<input type="number" name="bid_price" class="form-control">
	            			</div>

	            			<div class="form-group">
	            				<label for="">Days</label>
	            				<input type="number" name="bid_days" class="form-control">
	            				<input type="hidden" value="<?= $row['id']; ?>" name="bid_request_id">
	            			</div>
	            			<div class="form-group">
	            				<label for="">Description</label>
	            				<textarea name="bid_desc" id="" class="form-control" cols="30" rows="10"></textarea>
	            			</div>
	            			<div class="form-group">
	            				<input type="submit" name="bid_submit" value="Submit" class="btn btn-info">
	            			</div>
	            		</form>
	            		</div>
	            	</div>
	              
	            </div>
	            <div class="modal-footer">
	              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	            </div>
	          </div>

	        </div>
	      </div>
	      <!-- Modal CLose -->



	      
	           <p class="job_desc">
	                <strong>Est. Time: </strong> <span><?= $row['job_days']; ?> days</span> 
	                <strong>Budget: </strong> <span>$<?= $row['job_price']; ?></span>
	                <!-- <strong>Purposals: </strong> <span>7</span> -->
	           </p>
	           <p class="job_detail">
	                <?= $row['job_desc']; ?>
	           </p>

<?php $job_tags = comma_seprated_to_array($row['job_tags']); ?>

	           <p class="job_tag_sec">

	           	<?php foreach ($job_tags as $value): ?>
	           		<span class="job_tag"><?= $value; ?></span>
	           	<?php endforeach ?>
	               
	           </p>
	           
	          
	</div>



<?php } ?>
	        

	      
</div>



<?php include 'footer.php'; ?>