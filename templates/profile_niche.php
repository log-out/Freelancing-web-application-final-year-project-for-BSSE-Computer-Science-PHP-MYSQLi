<div class="col-lg-8">
	<div class="bg_white">
		<div class="row">

<?php 
	if (isset($_GET['user'])) {
     $user = $_GET['user'];
     $sql = "SELECT * FROM users WHERE username = '{$user}' ";
     $query = mysqli_query($conn, $sql);
     $profile_data= mysqli_fetch_assoc($query);

} else {
	// load profile data
	$profile_data = load_my_profile_data();
	$profile_data = @$profile_data[0];
	$user = $_SESSION['username']; 
}
?>

<?php 

	
	$sql = "SELECT * FROM gig_data WHERE username = '{$user}' ";
	$run_query = mysqli_query($conn, $sql);
	if (!$run_query) {
		die('gig data load failed') . mysqli_error($conn);
	} else {
		while ( $row = mysqli_fetch_assoc( $run_query ) ) {

			$niche_title = $row['niche_title'];
			$niche_price = $row['niche_price'];
			$niche_image = $row['niche_image'];
			$niche_rating = $row['niche_rating'];
			$order_completed = $row['order_completed'];
			$niche_desc  = $row['niche_desc']; ?>

			<div class="col-lg-4 fix_pad">
			     <div class="niche_card">
			          <div class="niche_image" style="background-image: url('assets/images/gig_images/<?= $niche_image; ?>');">
			               <!-- <img src="assets/images/fiverr-wordpress-gig-2.jpg" alt="" width="100%"> -->
			          </div>
			          <div class="niche_body">
			               <div class="niche_owner">
			                    <div class="owner_img">
			                         <a href="gig-single.php"><img src="assets/images/profile_images/<?= $profile_data['profileimage']; ?>" alt=""></a>
			                    </div>
			                    <div class="owner_name">
			                         <h4 class="text-capitalize"><a href="my_profile.php"><?= $profile_data['fname'] . ' ' . $profile_data['lname']; ?></a></h4>
			                         <p class="level">Level <?= $profile_data['profile_level']; ?></p>
			                    </div>
			               </div>
			               <div class="niche_title">
			                    <h4><a href="gig-single.php"><?= $niche_title; ?></a></h4>
			               </div>
			               <div class="">
			                    <p class="pull-left rating">
			                         <i class="fa fa-star"></i> <?= $niche_rating; ?>.0 (<?= $order_completed; ?>)
			                    </p>
			                    <p class="pull-right"><b>$<?= $niche_price; ?></b></p>
			               </div>
			               <div class="clearfix"></div>
			          </div>
			          
			  </div>
			</div>

		<?php }
	}



?>


<?php  
	if (isset($_GET['user'])) {
		if ($_GET['user'] != $_SESSION['username']) {
			echo "";
		}
	} else {?>
		<div class="col-lg-4 fix_pad">
		    <div class="niche_card">
		          
		          <div class="gig-add">
		          	<a href="gig-form.php"><i class="fa fa-plus-circle"></i></a>
		          	<h4>Create A New Niche</h4>
		          </div>
		          
		    </div>
		</div>
<?php } ?>



		</div>



		</div>
	</div>