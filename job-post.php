<?php include 'header.php'; ?>

<div class="container">
	<div class="row">
		<div class="col-sm-8">
			<div class="job-form">
				<form>
					<div class="form-group">
						<h1 class="title">Job Description</h1>
						<label>Title Of your Job</label>
						<input class="form-control" type="text" name="job-title" placeholder="Example: I need help with Blog writing">

						<label>Category</label>
						<select class="form-control">
							<option>-----</option>
							<option>Web Development</option>
							<option>Mobile Development</option>
							<option>Designing</option>
							<option>Writing</option>
							<option>Marketing</option>
							<option>Accounting</option>
							<option>Admin Support</option>
							<option>Other</option>
						</select>

						<label>Skills Level</label>
						<select class="form-control">
							<option>------</option>
							<option>Expert</option>
							<option>Intermediate</option>
							<option>Entry</option>
						</select>
					</div>

					<div class="form-group">
						<h1 class="title">Rate & Availability</h1>
						<label>How Would You Like To Pay</label>
						<select class="form-control">
							<option>Fixed Price</option>
							<option id="hrrate" onclick="rate_hour();">pay by the hour</option>
						</select>
						<input class="form-control" type="text" name="hourrate" placeholder="Enter your per hour rate" id="hourrate">
						<label>How long do you expect this job to last?</label>
						<input class="form-control" type="text" name="time" placeholder="Enter No of Days">
						<div id="job-price">
						<label>Job Price</label>
						<input class="form-control" type="text" name="price" placeholder="Enter Job price">
						</div>
						
						<label>Job Description</label>
						<textarea class="form-control" placeholder="Put Your Job requirements | Describe your job in details"></textarea>

						<label>Add Files</label>
						<input class="form-control" type="file" name="doc">
					</div>
					<input type="submit" name="submit" value="Post Job" class="btn custom-button-2 btn-lg">
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