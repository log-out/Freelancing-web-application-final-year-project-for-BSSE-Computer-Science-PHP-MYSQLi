<?php 	include 'header.php'; ?> 

<?php if (isset($_GET['id'])) {
	$id = $_GET['id'];

	$sql = "SELECT * FROM gig_data WHERE id = '{$id}' ";

	$select_query = mysqli_query($conn, $sql);
	while ($row = mysqli_fetch_assoc($select_query)) { 
		$id 		 = $row['id'];
		$niche_title = $row['niche_title'];
		$niche_price = $row['niche_price'];
		$niche_category = $row['niche_category'];
		$niche_tag = $row['niche_tag'];
		$niche_desc = $row['niche_desc'];
		$niche_rating = $row['niche_rating'];
		$order_completed = $row['order_completed'];
		$niche_image = $row['niche_image']; 
		$order_in_queue = $row['order_in_queue']; 
	}

	$niche_tag = comma_seprated_to_array($niche_tag);
	$profile_data = load_my_profile_data(); 
    $profile_data = @$profile_data[0];






} else {
	die('<h1>No Niche Selected</h1>');
} ?>


<div class="container">
	<div class="row">
		<div class="col-sm-6 col-sm-offset-1">
			<div class="gig-box">
				<div class="gig-header">
					<h2><?= $niche_title ?></h2>
					<p class="pull-left profile_rating">
						<i class="fa fa-star"></i> (<?= $niche_rating; ?>) &nbsp; &nbsp; 
					</p><!-- //Rating -->
					<p> <?= $order_in_queue ?> Orders In Queue</p>
				</div><!-- //Gig Header -->
					<hr>
				<div class="gig-body">
					<div class="gig-cat">
						<span><a href="#"><?= $niche_category; ?></a></span>
					</div><!-- //Gig Cat -->
					<div class="Gig-cover">
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					
					<!-- Wrapper for slides -->
					<div class="carousel-inner">
			    <div class="item active">
			    	<img src="assets/images/gig_images/<?= $niche_image; ?>" alt="First slide">
                    <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            
                        </div>
                    </div><!-- /header-text -->
			    </div>
			    <!-- <div class="item">
			    	<img src="assets/images/wordpress.png" alt="Second slide">
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            
                        </div>
                    </div>
			    </div>
			    <div class="item">
			    	<img src="http://unsplash.s3.amazonaws.com/batch%209/barcelona-boardwalk.jpg" alt="Third slide">
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            
                        </div>
                    </div>
			    </div> -->
			</div>
			<!-- Controls -->
			<!-- <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		    	<span class="glyphicon glyphicon-chevron-left"></span>
			</a>
			<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		    	<span class="glyphicon glyphicon-chevron-right"></span>
			</a> -->
		</div><!-- /carousel -->

</div><!-- Gig Cover -->
<hr>
<div class="gig-about">
	<h3>About This Niche</h3>
	<p>
		<?= $niche_desc; ?>
	</p>
</div><!-- About Gig -->
<hr>
<div class="reviews">
	<h3>Reviews</h3>
	<span class="reviews-dp"><img src="assets/images/dp.jpg">Aleem</span>
	<span class="profile_rating"><i class="fa fa-star"></i> 5</span>
	<p class="reviews-text">
		This guy work good and complete project on Time.
	</p>
	<p class="reviews-date">
		4 days ago
	</p>
</div><!-- Reviews -->
</div><!-- Gig Body -->
</div><!-- //Gig Box -->
<div class="gig-tags">
	<?php foreach ($niche_tag as $value): ?>
		<span><?= $value; ?></span>
	<?php endforeach ?>
	
	
</div><!-- Tags -->
</div>

		<div class="col-sm-4">
			<div class="gig-sidebar">
				<h3>Package Detail</h3>
				<span style="font-size: 18px;">Price</span>
				<span style="float: right; font-size: 18px;">$<?= $niche_price; ?></span>
				<p>Up to 5 pages, Best for personal website,small business or blog,Design Focus</p>
				<span><i class="fa fa-clock"></i> 3 Days Delivery Time</span>

				<ul>
					<li>Complete Websiet</li>
					<li>Custom Design</li>
					<li>Unlimited Revisions</li>
					<li>Responsive Design</li>
					<li>Plugin Installation</li>
					<li>Content Upload</li>
				</ul>
				<a href="#" class="btn btn-block custom-button-2">Get Started</a>
			</div><!-- Gig Side Bar -->

			<div class="profile-sidebar">
				<div class="profile-dp">
					<img src="assets/images/profile_images/<?= $profile_data['profileimage']; ?>">
					<h3 class="profile_name"><?= $profile_data['fname'] . ' ' . $profile_data['lname'] ?>  <?php if (get_profile_status() == 'verified'): ?>
                         <a href="#" data-toggle="tooltip" title="This profile has been verified by our team!"><span class="badge badge-success">verified</span></a>
                    <?php endif ?></h3>
					<p><?= $profile_data['profile_title']; ?></p>
					<span class="profile_rating">
					<p class="profile_rating">
                         <i class="fa fa-star"></i> 
                         <strong> <?= $profile_data['rating'] ?>.0</strong> (<?= $profile_data['total_order_completed'] ?>)
                    </p>
					</span>
					<a href="#" class="btn btn-block btn-primery">Contact Me</a>
				</div><!-- //Profile Dp -->
				<hr>
				<div class="profile-details">
				<span><i class="fa fa-map-marker-alt"></i> Location</span>
				<span style="float: right;">Pakistan</span><br><br>
				<span><i class="fa fa-user"></i> Member Since</span>
				<span style="float: right;">2016</span><br><br>
				<span><i class="fa fa-clock"></i> Recent Devlivery</span>
				<span style="float: right;">24 Hours Ago</span>
				</div><!-- Profile Details -->
			</div>
		</div>
	</div>
</div><!-- Container -->
<?php 	include 'footer.php'; ?>