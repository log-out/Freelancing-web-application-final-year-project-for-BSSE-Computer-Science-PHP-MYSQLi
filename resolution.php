<?php include 'header.php'; ?>
<?php if (!is_session_set()) {
	header("Location: login.php");
} ?>
<div class="container">
	<div class="row">
		<div class="res-header">
		<div class="col-sm-10">
			<ul>
				<li class="res-active">Select action</li>
			</ul>
		</div>
		<div class="col-sm-2">
			<a href="order-system.php">Exit</a>
		</div>
		</div><!-- res header -->
	<div class="col-sm-8">
		<div class="res-content">
			<h1 class="title">Resolution Center</h1>
			<p>Welcome! Here you can work things out and resolve issues regarding your Jobs</p>
			<hr>

			<div id="selection">
				<form>
					<p>What can we help you do?</p>
					<input type="radio" name="selection">Modify the order
					<input type="radio" name="selection">Extend the delivery time
					<input type="radio" name="selection">Ask the buyer to cancel this order
					<input type="submit" id="next" class="btn btn-md custom-button-2" value="Send">
					<hr>
				</form>
			</div>
		</div><!-- res contant -->
	</div>

	<div class="col-sm-4">
		
	</div>
	</div>
</div>
<?php include 'footer.php'; ?>
