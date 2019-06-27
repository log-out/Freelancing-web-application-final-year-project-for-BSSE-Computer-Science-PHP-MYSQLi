<?php include 'header.php'; ?>


<?php  
	if (isset($_POST['gig_submit'])) {

		$niche_title  		= mysqli_real_escape_string($conn, $_POST['niche_title']);
		$niche_category 	= mysqli_real_escape_string($conn, $_POST['niche_category']);
		$niche_price 		= mysqli_real_escape_string($conn, $_POST['niche_price']);
		$niche_tag 			= mysqli_real_escape_string($conn, $_POST['niche_tag']);
		$niche_image 		= $_FILES['niche_image']['name'];
		$niche_image_temp 	= $_FILES['niche_image']['tmp_name'];
		$niche_desc 		= mysqli_real_escape_string($conn, $_POST['niche_desc']);

		$niche_cat_slug = createSlug($niche_category );

		// Move uploaded file to server
		move_uploaded_file($niche_image_temp, "assets/images/gig_images/$niche_image");
		$username = $_SESSION['username'];


		$query = "INSERT INTO gig_data(username, niche_title, niche_category, niche_cat_slug, niche_price, niche_tag, niche_image, niche_desc) VALUES('{$username}', '{$niche_title}', '{$niche_category}','{$niche_cat_slug}', '{$niche_price}', '{$niche_tag}', '{$niche_image}', '{$niche_desc}')";




		$submit_query = mysqli_query($conn, $query);

		if (!$submit_query) { ?>

			<div class="alert alert-danger ed_alert">
			  <strong>Failed!</strong> Action Field! The form data were not add to the data, please try again or contact to custom support.
			  <?php echo mysqli_error($conn); ?>
			</div>
			
		<?php } else { ?>

			<div class="alert alert-success ed_alert">
			  <strong>Success!</strong> Your Gig has been published successfully. click on <a href="my_profile.php">My Profile</a> to view the gigs.
			</div>

		<?php }

	} else { ?>
		<div class="alert alert-danger ed_alert">
			<strong>Invalid!</strong> action.
		</div>
	<?php }








?>


<?php include 'footer.php'; ?>