<?php include 'header.php'; ?>
<?php include "includes/conn.php" ?>


<div class="row" style="margin: 30px auto;">
	
	<?php include_once 'templates/category_sidebar.php'; ?>


<?php  

	if (isset($_GET['cat'])) {
		$cat = $_GET['cat'];
	} else {
		$cat = "";
	}


?>

	<div class="col-lg-9">
		<div class="bg_white">
			<div class="row">

				<?php  

					$sql = "SELECT * FROM gig_data WHERE niche_category = '{$cat}' ";

					$select_query = mysqli_query($conn, $sql);
					while ($row = mysqli_fetch_assoc($select_query)) { 
						$niche_title = $row['niche_title'];
						$niche_price = $row['niche_price'];
						$niche_image = $row['niche_image']; ?>

			<div class="col-lg-3 fix_pad">
			     <div class="niche_card">
			          <div class="niche_image" style="background-image: url(assets/images/gig_images/<?php echo $niche_image; ?>)">
			               <!-- <img src="assets/images/fiverr-wordpress-gig-2.jpg" alt="" width="100%"> -->
			          </div>
			          <div class="niche_body">
			               <div class="niche_owner">
			                    <div class="owner_img">
			                         <a href="gig-single.php"><img src="assets/images/dp.jpg" alt=""></a>
			                    </div>
			                    <div class="owner_name">
			                         <h4><a href="my_profile.php">Waqas Saleem</a></h4>
			                         <p class="level">Level 2</p>

			                    </div>
			               </div>
			               <div class="niche_title">
			                    <h4><a href="gig-single.php"><?php echo $niche_title; ?></a></h4>
			               </div>
			               <div class="">
			                    <p class="pull-left rating">
			                         <i class="fa fa-star"></i> 5.0 (101)
			                    </p>
			                    <p class="pull-right"><b>$<?php echo $niche_price; ?></b></p>
			               </div>
			               <div class="clearfix"></div>
			          </div>
			          
			  </div>
			</div>


						







					<?php } ?>


			</div>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>