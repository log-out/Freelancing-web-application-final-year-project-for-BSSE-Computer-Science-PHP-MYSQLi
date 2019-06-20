<?php
include 'includes/conn.php';

function is_session_set() {
	if (!isset($_SESSION)) {
		session_start();
	}
	
	if (isset($_SESSION['username']) && isset($_SESSION['email'])) {
    	return 1;
	} else {
		return 0;
	}

}


// load my gig data
function load_my_gig_data() {

	$username = $_SESSION['username'];
	global $conn;
	$gig_data = array();

	$sql = "SELECT * FROM gig_data WHERE username = '{$username}'";
	

	$run_query = mysqli_query( $conn, $sql );

	if (!$run_query) { ?>
		

		<div class="alert alert-success alert-dismissable ed_alert">
		  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		   <strong>Error!</strong>Error while loading Niche data. Please contact to <a href="login.php">customer support</a> for help.
		  <?php echo mysqli_error($conn); ?>
		</div>

	<?php } else {

		while ($row = mysqli_fetch_assoc($run_query)) {
			 $gig_data[] = $row;
		}

		return $gig_data;

	}

}

// === load my gig data
//============================================================

/* Load my profile data
===========================================================*/

function load_my_profile_data() {

	$username = $_SESSION['username'];
	global $conn;
	$profile_data = array();

	$sql = "SELECT * FROM users WHERE username = '{$username}'";

	$run_query = mysqli_query( $conn, $sql );

	if (!$run_query) { ?>
		

		<div class="alert alert-success alert-dismissable ed_alert">
		  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		   <strong>Error!</strong>Error while loading user profile data. Please contact to <a href="login.php">customer support</a> for help.
		  <?php echo mysqli_error($conn); ?>
		</div>

	<?php } else {

		while ($row = mysqli_fetch_assoc($run_query)) {
			 $profile_data[] = $row;
		}

		return $profile_data;

	}

}


/* function convert the "," from the string to array
=======================================================*/

function comma_seprated_to_array($string, $separator = ',') {

	$vals = explode($separator, $string);

	foreach ($vals as $key => $val) {
		$vals[$key] = trim($val);
	}

	return array_diff($vals, array(""));

}

function get_profile_status() {

	$username = $_SESSION['username'];
	global $conn;

	$sql = "SELECT profile_status FROM users WHERE username = '{$username}'";

	$run_query = mysqli_query($conn, $sql);

	if (!$run_query) {
		die('status query failed') . mysqli_error($conn);
	} else {
		while ($row = mysqli_fetch_assoc($run_query)) {
			return $row['profile_status'];
		}
	}

}

// Function to get the client IP address
function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
        $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
        $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
        $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
       $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
        $ipaddress = getenv('REMOTE_ADDR');
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}


// slug creator

function createSlug($str, $delimiter = '-'){

    $slug = strtolower(trim(preg_replace('/[\s-]+/', $delimiter, preg_replace('/[^A-Za-z0-9-]+/', $delimiter, preg_replace('/[&]/', 'and', preg_replace('/[\']/', '', iconv('UTF-8', 'ASCII//TRANSLIT', $str))))), $delimiter));
    return $slug;

} 