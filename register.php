<?php include 'header.php'; ?>

<div class="container">
<div class="form-header">
	<div class="row">
		<div class="col-sm-4">
			<div id="stp-1" class="header-tab active">
				<span class="no-circle">1</span>
				<span class="text">Personal Info</span>
			</div><!-- //Header Tab -->
		</div>

		<div class="col-sm-4">
			<div id="stp-2" class="header-tab">
				<span class="no-circle">2</span>
				<span class="text">Skills & Certificate</span>
			</div><!-- //Header Tab -->
		</div>

		<div class="col-sm-4">
			<div id="stp-3" class="header-tab">
				<span class="no-circle">3</span>
				<span class="text">Security Details</span>
			</div><!-- //Header Tab -->
		</div>
	</div>
</div><!-- /Form Header -->
	<div class="row">
		<div class="col-sm-6 col-sm-offset-3">
		
				<div class="form-data">
					<form name="ProfileForm">
					<div id="step-1">
					<div class="section-heading">
					<h2>Account Details</h2>
					</div><!-- //Section Heading -->
					<ul class="errorMessages"></ul>
						<div class="form-group">
							<label>First Name</label>
							<input type="text" name="fname" class="form-control" onblur="requiredField(this);" required="required">
							<label>last Name</label>
							<input type="text" name="lname" class="form-control" onblur="requiredField(this);">
							<label>Email</label>
							<input type="email" name="email" class="form-control" onblur="requiredField(this);">
							<label>Phone No</label>
							<input type="phone" name="phone" class="form-control" onblur="requiredField(this);">
						</div><!-- //form Group -->
						<div class="form-button">
							<input id="next" class="btn btn-md custom-button-2" onclick="form_step_1();" value="Next">
						</div><!-- /Form Button -->
					</div><!-- //Step-1 -->
					<div id="step-2">
					<div class="section-heading">
					<h2>Skills & Certificates</h2>
					</div><!-- //Section Heading -->
						<div class="form-group">
							<label>Skills</label>
							<div id="tags">
								<span class="tag">Photoshop</span>
    							<span class="tag">Illustrator</span>
								<input type="text" name="skills" placeholder="Add a Skill and hit comma" class="form-control">
							</div><!-- Tags -->
							
							<label>Certificate</label>
							<div class="certificate">
								<label>Certificate Name</label>
								<input type="text" name="cname" class="form-control">
								<label>Image</label>
								<input type="file" name="cimage" class="form-control">
							</div><!-- Certificate -->
							
						</div><!-- //form Group -->
						<div class="form-button">
							<input id="next" class="btn btn-md custom-button-2" value="Next" onclick="form_step_2();">
						</div><!-- /Form Button -->
					</div><!-- //Step-2 -->	

					<div id="step-3">
					<div class="section-heading">
					<h2>Security Details</h2>
					</div><!-- //Section Heading -->
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control">
							<label>Security Question</label>
							<select class="form-control">
								<option>Your First Teacher Name?</option>
								<option>Your Pet Name?</option>
								<option>Your School Name?</option>
								<option>Your Nick Name?</option>
								<option>Your Best Friend Name?</option>
							</select>
							<input type="text" name="sanswer" class="form-control" placeholder="Enter Answer">
							<label>Email</label>
							<input type="semail" name="email" class="form-control">
							<input name="vemail" class="custom-button-2 btn btn-md" value="Verify"><br>
							<label>Phone No</label>
							<input type="phone" name="sphone" class="form-control">
							<input name="bphone" class="custom-button-2 btn btn-md" value="Verify"><br>
							<label>Profile Image</label>
							<input type="file" name="pimage" class="form-control">
							<input name="vpimage" class="custom-button-2 btn btn-md" value="Verify">
						</div><!-- //form Group -->
						<div class="form-button">
							<input type="submit" class="btn btn-md custom-button-2" value="Submit">
						</div><!-- /Form Button -->
					</div><!-- //Step-1 -->		
					</form>
				</div><!-- //Form Data -->	
			
		</div>
	</div>
</div><!-- //container -->


<?php include 'footer.php'; ?>