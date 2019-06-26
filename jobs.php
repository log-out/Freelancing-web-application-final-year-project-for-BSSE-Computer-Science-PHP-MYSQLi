<?php include 'header.php'; ?>

<div class="container">
	<h2 class="job_feed_title">Jobs</h2>

<?php  
	


	$sql = "SELECT * FROM jobs";

	$query = mysqli_query($conn, $sql);
	while ( $row = mysqli_fetch_assoc( $query ) ) { ?>
		
	<div class="row row_striped job_row">
	      <div class="job_title pull-left">
	           <h3><?= $row['job_title']; ?></h3>
	      </div>
	      <div class="pull-right">
	      	<a href="" class="btn btn-info">Bid Now</a>
	      </div>
	      <div class="clearfix"></div>
	           <p class="job_desc">
	                <strong>Est. Time: </strong> <span><?= $row['job_days']; ?> days</span> 
	                <!-- <strong>Posted: </strong> <span>21 minute ago</span> -->
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