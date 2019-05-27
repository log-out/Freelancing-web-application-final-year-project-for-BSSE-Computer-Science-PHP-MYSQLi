<?php include 'header.php'; ?>


<div id="result"></div>

<?php  

	// load profile data
	$profile_data = load_my_profile_data();
	$profile_data = @$profile_data[0];

	// load gig data
	$gig_data = load_my_gig_data();
	$gig_data = @$gig_data[0];

	// skills to array
	$profile_skills = $profile_data['skills'];
	$skills = comma_seprated_to_array($profile_skills);

?>


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
					<form name="ProfileForm" action="includes/profile_submited.php" method="post" enctype="multipart/form-data">
					<div id="step-1">
					<div class="section-heading">
					<h2>Account Details</h2>
					</div><!-- //Section Heading -->
					<ul class="errorMessages"></ul>
						<div class="form-group">
							<label>First Name</label>
							<input type="text" name="fname" value="<?= $profile_data['fname'] ?>" class="form-control" onblur="requiredField(this);" required="required">
							<label>last Name</label>
							<input type="text" name="lname" value="<?= $profile_data['lname'] ?>" class="form-control" onblur="requiredField(this);">
							<label>Email</label>
							<input type="email" disabled="" name="email" value="<?= $profile_data['email'] ?>" class="form-control" onblur="requiredField(this);">
							<!-- <label>Phone No</label>
							<input type="phone" name="phone" value="<?= $profile_data['phone'] ?>" class="form-control" onblur="requiredField(this);"> -->
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
							
							<label>Certificate</label>
							<div class="certificate">
								<label>Certificate Name</label>
								<input type="text" value="<?= $profile_data['certificatename'] ?>" name="cname" class="form-control">
								<label>Image</label>
								<input type="file" name="cimage" class="form-control">
							</div><!-- Certificate -->

							<label>Skills</label>
							<div id="tags">
								<?php foreach ($skills as $value) { ?>
									
									<span class="tag"><?= $value; ?></span>

								<?php
								} ?>
								<!-- <span class="tag">Photoshop</span>
    							<span class="tag">Illustrator</span> -->
								<input type="text" name="skills" placeholder="Add a Skill and hit comma" class="form-control">
								<p class="field_desc">Add a Skill and hit comma</p>
							</div><!-- Tags -->
							
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
							<!-- <label>Password</label>
							<input type="password" name="password" class="form-control"> -->
							<label>Security Question</label>
							<select class="form-control" name="security_q">
								<option value="<?= $profile_data['securityquestion'] ?>"><?= $profile_data['securityquestion'] ?></option>
								<option value="Your First Teacher Name?">Your First Teacher Name?</option>
								<option value="Your Pet Name?">Your Pet Name?</option>
								<option value="Your School Name?">Your School Name?</option>
								<option value="Your Nick Name?">Your Nick Name?</option>
								<option value="Your Best Friend Name?">Your Best Friend Name?</option>
							</select>
							<input type="text" name="security_a" class="form-control" placeholder="Enter Answer" value="<?= $profile_data['security_answer'] ?>">
							<label>Email</label>
							<input disabled="" type="semail" name="email" value="<?= $profile_data['email'] ?>" id="verify_email" class="form-control">
							<button id="email_btn" class="custom-button-2 btn btn-md">Verify</button><br>
							<label>Phone No</label>
							<input type="phone" placeholder="e.g +923xxxxxxxxx" id="verify_phone" name="phone" class="form-control" required="" value="<?= $profile_data['phone'] ?>">
							<button id="phone_btn" disabled="" class="custom-button-2 btn btn-md">Send code</button><br><br>

							<input type="text" id="phone_code" placeholder="Enter your code here" name="phone_code" class="ed_hide form-control">
							<button id="phone_code_btn" class="ed_hide custom-button-2 btn btn-md">Verify</button><br>

							<label>Profile Image</label>
							<input type="file" name="pimage" class="form-control">
							<button id="image_btn" disabled="" class="custom-button-2 btn btn-md">Verify</button>
						</div><!-- //form Group -->
						<div class="form-button">
							<input type="submit" class="btn btn-md custom-button-2" value="Submit" name="verify_submit">
						</div><!-- /Form Button -->
					</div><!-- //Step-1 -->		
					</form>
				</div><!-- //Form Data -->	
			
		</div>
	</div>
</div><!-- //container -->


<?php include 'footer.php'; ?>


<script>
	$(document).ready(function(){
		$('#email_btn').click(function(event) {
			/* Act on the event */
			event.preventDefault();
			$('#email_btn').attr('disabled', 'false');
			$('#phone_btn').removeAttr('disabled');
			$('#image_btn').removeAttr('disabled');
			
			var data = $('#verify_email').val();

			$.post('includes/ajax_process.php', {verify_email: data}, function(result) {
				// $('#result').html();
				alert(result);
			});
		});


		$('#phone_btn').click(function(event) {
			/* Act on the event */
			event.preventDefault();
			

			var data = $('#verify_phone').val();
			$.post('includes/ajax_sms_process.php', {verify_phone: data, phone_btn_submit: true}, function(result) {
				/*optional stuff to do after success */
				$('#phone_code').removeClass('ed_hide');
				$('#phone_code_btn').removeClass('ed_hide');


				alert(result);
			});
		});

		$('#phone_code_btn').click(function(event) {
			/* Act on the event */
			event.preventDefault();

			var data = $('#phone_code').val();
			$.post('includes/ajax_sms_process.php', {phone_code: data, phone_code_submit: true}, function(result) {
				/*optional stuff to do after success */

				alert(result);
			});
		});



	});
</script>