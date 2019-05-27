<?php include 'header.php'; ?>


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
					<option value="Web Design">Web Design</option>
					<option value="WordPress">WordPress</option>
					<option value="Logo Design">Logo Design</option>
					<option value="iOS App">iOS App</option>
					<option value="Android Ap">Android App</option>
					<option value="Content Writter">Content Writter</option>
					<option value="Web Researcher">Web Researcher</option>
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