<?php include 'includes/conn.php'; ?>
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

</head>
<body>

<!-- Top Nav -->
<nav>
<div class="container">
<div class="top-bar">
	<div class="row">
		<div class="col-sm-4">
			<div class="brand">
				<a href="index.php">
				<img src="assets/images/logo.png" class="img-responsive">
				</a>
			</div><!-- //Brand -->
		</div>

		<div class="col-sm-8">
			<div class="top-links">
				<ul>
					<li><a href="login.php">Log In</a></li>
					<li><a href="login.php">Sign Up</a></li>
					<li><a href="#" class="btn btn-sm custom-button">Post Job</a></li>
					 <li class="dropdown">
    					<img src="assets/images/dp.jpg" class="dropdown-toggle img-responsive dp-img" data-toggle="dropdown">
    						<ul class="dropdown-menu">
      							<li><a href="my_profile.php"><i class="fa fa-user"></i> Profile</a></li>
      							<li><a href="register.php"><i class="fa fa-cog"></i> Settings</a></li>
      							<li><a href="#"><i class="fa fa-life-ring"></i> Help and Support</a></li>
      							<li><a href="#"><i class="fa fa-sign-out-alt"></i> Logout</a></li>
    							</ul>
  					</li>

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
			<li><a href="category.php">Web Dev</a></li>
			<li><a href="category.php">Mobile Dev</a></li>
			<li><a href="category.php">Design</a></li>
			<li><a href="category.php">writing</a></li>
			<li><a href="category.php">Admin Support</a></li>
			<li><a href="category.php">Customer Services</a></li>
			<li><a href="category.php">Marketing</a></li>
			<li><a href="category.php">Accounting</a></li>
			<li><a href="category.php">See All Categories</a></li>
		</ul>
	</div>
	</div><!--- //Categories -->
</nav>
<!-- // Top Nav -->