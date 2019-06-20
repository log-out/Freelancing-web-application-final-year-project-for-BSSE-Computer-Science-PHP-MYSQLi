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

					$sql = "SELECT * FROM gig_data WHERE niche_cat_slug = '{$cat}' ";

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
						$niche_image = $row['niche_image']; ?>

			<?php include 'templates/niche_card.php'; ?>


						







					<?php } ?>


			</div>
		</div>
	</div>
</div>

<?php include 'footer.php'; ?>