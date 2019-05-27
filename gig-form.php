<?php include 'header.php'; ?>

<div class="container" style="margin: 20px auto;">
<form action="">
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
				<select name="" class="form-control" id="">
					<option value="">Web Design</option>
					<option value="">WordPress</option>
					<option value="">Logo Design</option>
					<option value="">iOS App</option>
					<option value="">Android App</option>
					<option value="">Content Writter</option>
					<option value="">Web Researcher</option>
				</select>
			</div>
			<div class="col-lg-4">
				<span>Price</span>
				<input type="number" class="form-control" name="niche_title">

			</div>
		</div>

		<div class="form-group row">
			<div class="col-lg-6">
				<span>Niche Tag</span>
				<input type="text" name="" class="form-control">
				<p class="field_desc">Please add more tag, seprated by comma</p>
			</div>

			<div class="col-lg-6">
				<span>Niche Image</span>
				<input type="file" class="form-control">
			</div>
		</div>

		<div class="form-group row">
			<div class="col-lg-12">
				<span>Niche Description</span>
				<textarea name="" id="" cols="30" rows="10" class="form-control tinymce"></textarea>
			</div>
		</div>
		<input type="submit" name="" class="btn btn-md custom-button-2" value="submit">
	</div>
</form>
</div>

<?php include 'footer.php'; ?>