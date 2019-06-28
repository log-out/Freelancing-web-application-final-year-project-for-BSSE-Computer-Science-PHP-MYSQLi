<?php include 'includes/conn.php'; ?>
<?php include 'functions.php'; ?>
<?php 
session_start();
$username = $_SESSION['username']; ?>
<!DOCTYPE html> 
<html>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ENTREPRENEUR DIRECTORY</title>
	<!-- Stylesheets -->
	<!-- Bootstrap Style -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/price-range.css">
	
	<!-- Custom Style -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style2.css">

	<!-- Fonts -->
	<link rel="stylesheet" type="text/css" href="assets/css/fonts/css/all.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body>

<!-- Top Nav -->
<nav>
<div class="container">
<div class="top-bar">
	<div class="row">
		<div class="col-sm-4">
			<div class="brand">
				<a href="home.php">
				<img src="assets/images/logo.png" class="img-responsive">
				</a>
			</div><!-- //Brand -->
		</div>

		<div class="col-sm-8">
			<div class="top-links">
				<ul>
					<?php if (!is_session_set()) { ?>
						<li><a href="login.php">Log In</a></li>
						<li><a href="login.php">Sign Up</a></li>
					<?php } ?>
							
					


					<?php if (is_session_set()) { ?>

		 <li class="dropdown">
		 	<a href="#" class="dropdown-toggle" data-toggle="dropdown">More <span class="glyphicon 	glyphicon glyphicon glyphicon glyphicon-menu-down"></span></a>

		 	<ul class="dropdown-menu">
				<li><a href="offers.php">Offers</a></li>
				<li><a href="orders.php">Orders</a></li>
						
				</ul>
		 	</li>

					<li><a href="jobs.php" class="btn btn-sm custom-button">View Jobs</a></li>
					<li><a href="job-post.php" class="btn btn-sm custom-button">Post Job</a></li>
					 <li class="dropdown">

	<?php  
		$sql = "SELECT 	profileimage FROM users WHERE username = '{$username}' ";
		$query = mysqli_query($conn, $sql);
		$row = mysqli_fetch_assoc($query);

	?>				 	
    					<img src="assets/images/profile_images/<?= $row['profileimage']; ?>" class="dropdown-toggle img-responsive dp-img" data-toggle="dropdown">
    						<ul class="dropdown-menu">
      							<li><a href="my_profile.php"><i class="fa fa-user"></i> Profile</a></li>
      							<li><a href="register.php"><i class="fa fa-cog"></i> Settings</a></li>
      							<li><a href="#"><i class="fa fa-life-ring"></i> Help and Support</a></li>
      							<li><a href="logout.php"><i class="fa fa-sign-out-alt"></i> Logout</a></li>
    							</ul>
  					</li>
  					<?php } ?>

				</ul>
			</div><!-- //Top Links -->
		</div>
	</div>
	</div>
	</div><!--- //Top Bar -->

	<div class="categories"> 
		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

	<div id="nav" class="categories-bar collapse navbar-collapse">
		<ul>

<?php  

	$sql = "SELECT * FROM categories";
	$query = mysqli_query($conn, $sql);
	if (!$query) {
		die() . mysqli_error($conn);
	} else {
		while ( $row = mysqli_fetch_assoc($query) ) { ?>

			<li><a class="text-capitalize" href="category.php?cat=<?= $row['category_slug'] ?>"><?= $row['category_name']; ?></a></li>
			 
		<?php }
	}


?>

		</ul>
	</div>
	</div><!--- //Categories -->
</nav>
<!-- // Top Nav -->