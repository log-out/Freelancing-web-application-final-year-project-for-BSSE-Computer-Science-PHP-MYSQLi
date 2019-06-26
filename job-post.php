<?php include 'header.php'; ?>

<?php  

	if (isset($_POST['job_submit'])) {
		
		$username 		= $_SESSION['username'];
		$job_title		= $_POST['job_title'];
		$job_category	= $_POST['job_category'];
		$job_tags		= $_POST['job_tags'];
		$skills_level	= $_POST['skills_level'];
		$job_days		= $_POST['job_days'];
		$job_price		= $_POST['job_price'];
		$job_desc		= $_POST['job_desc'];

		$sql = "INSERT INTO jobs(username, job_title, job_category, job_tags, skills_level, job_days, job_price, job_desc) VALUES( '{$username}', '{$job_title}', '{$job_category}', '{$job_tags}', '{$skills_level}', '{$job_days}', '{$job_price}', '{$job_desc}' )";

		$query = mysqli_query($conn, $sql);

		if ($query) { ?>
			<div class="alert alert-success alert-dismissable ed_alert">
			  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			   <strong>Success!</strong> Job has been posted successfully.
			</div>
		<?php } 

	}



?>

<div class="container">
	<div class="row">
		<div class="col-sm-8">
			<div class="job-form">
				<form method="post" action="">
					<div class="form-group">
						<h1 class="title">Job Description</h1>
						<label>Title Of your Job</label>
						<input class="form-control" type="text" name="job_title" placeholder="Example: I need help with Blog writing">

						<label>Category</label>
						<select class="form-control" name="job_category">

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

						<label>Skills Level</label>
						<select class="form-control" name="skills_level">
							<option>Expert</option>
							<option>Intermediate</option>
							<option>Entry</option>
						</select>
					</div>

					<label>Tags</label>
						<input class="form-control" type="text" name="job_tags" placeholder="Tags">
						<p class="field_desc">Separeted by comma. e.g web, design, php</p>

					<div class="form-group">
						<h1 class="title">Rate & Availability</h1>
						<!-- <label>How Would You Like To Pay</label> -->
						<!-- <select class="form-control">
							<option>Fixed Price</option>
							<option id="hrrate" onclick="rate_hour();">pay by the hour</option>
						</select> -->
						<!-- <input class="form-control" type="text" name="hourrate" placeholder="Enter your per hour rate" id="hourrate"> -->
						<label>How long do you expect this job to last?</label>
						<input class="form-control" type="text" name="job_days" placeholder="Enter No of Days">
						<div id="job-price">
						<label>Job Price</label>
						<input class="form-control" type="text" name="job_price" placeholder="Enter Job price">
						</div>
						
						<label>Job Description</label>
						<textarea name="job_desc" class="form-control" placeholder="Put Your Job requirements | Describe your job in details"></textarea>

						<!-- <label>Add Files</label>
						<input class="form-control" type="file" name="doc"> -->
					</div>
					<input type="submit" name="job_submit" value="Post Job" class="btn custom-button-2 btn-lg">
				</form>
			</div><!-- job Form -->
		</div>

		<div class="col-sm-4">
			<div class="side-bar">
				<p>1- Enter Title for your Job Example: i need a UI & UX designer for my App.</p>

				<p>2- Select category for your Job in Drop down Example: web development , writing</p>

				<p>3- Skills Level of candidates for job Example: Expert  </p>

				<br>
				<br>
				<br>
				<p>4- price for your job Fixed or Per Hour prices Example: $800 for job or $50/hour prices for job</p>

				<p>5- Job Duration how long your job Example: 4 days for this job</p>
				<p>6- Job Price for a fixed job category Example: $500 for complete Job</p>

				<p>7- Job Description include all details about your job. provide all details for job so right candidates will contact you.</p>
				<br>
				<br>
				<p>8- Files: Extra Files for you Job to illustrate what you exactly need</p>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>