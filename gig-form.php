<?php include 'header.php'; ?>
<?php if (!is_session_set()) {
	header("Location: login.php");
} ?>

<div class="container" style="margin: 20px auto;">
<form action="gig_added.php" method="post" enctype="multipart/form-data">
	<div class="bg_white">
		<div class="niche_form_head">
			<h1>Niche Form</h1>
			<p>Please fill out the form to publish your Niche as public</p>
		</div>
		<div class="form-group row">
			<div class="col-lg-4">
				
				<span>Niche title</span>
				<input type="text" class="form-control" name="niche_title">
			</div>
			<div class="col-lg-4">
				<span>Niche Category</span>
		<select name="niche_category" class="form-control" id="">

			<?php  

				$sql = "SELECT * FROM categories";
				$query = mysqli_query($conn, $sql);
				if (!$query) {
					die() . mysqli_error($conn);
				} else {
					while ( $row = mysqli_fetch_assoc($query) ) { ?>

						<option value="<?= $row['category_name']; ?>"><?= $row['category_name']; ?></option>
						 
					<?php }
				}


			?>

		</select>
			</div>
			<div class="col-lg-4">
				<span>Price</span>
				<input type="number" class="form-control" name="niche_price">

			</div>
		</div>

		<div class="form-group row">
			<div class="col-lg-6">
				<span>Niche Tag</span>
				<input type="text" name="niche_tag" class="form-control">
				<p class="field_desc">Please add more tag, seprated by comma</p>
			</div>

			<div class="col-lg-6">
				<span>Niche Image</span>
				<input type="file" name="niche_image" class="form-control">
			</div>
		</div>

		<div class="form-group row">
			<div class="col-lg-12">
				<span>Niche Description</span>
				<textarea name="niche_desc" id="" cols="30" rows="10" class="form-control tinymce"></textarea>
			</div>
		</div>
		<input type="submit" name="gig_submit" class="btn btn-md custom-button-2" value="submit">
	</div>
</form>
</div>

<?php include 'footer.php'; ?>