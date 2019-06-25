<?php include 'includes/conn.php';

function createSlug($str, $delimiter = '-'){

    $slug = strtolower(trim(preg_replace('/[\s-]+/', $delimiter, preg_replace('/[^A-Za-z0-9-]+/', $delimiter, preg_replace('/[&]/', 'and', preg_replace('/[\']/', '', iconv('UTF-8', 'ASCII//TRANSLIT', $str))))), $delimiter));
    return $slug;

} 

function ed_mysqli_error( $query ) {

	global $conn;

	if (!$query) {
		die('Mysqli Errors ->') . mysqli_error($conn);
	}

}

function total_registred_users() {

	global $conn;
	$sql = "SELECT * FROM users";

	$query = mysqli_query($conn, $sql);
	$rows = mysqli_num_rows($query);

	return $rows;
}

function total_no_of_categories() {

	global $conn;
	$sql = "SELECT * FROM categories";

	$query = mysqli_query($conn, $sql);
	$rows = mysqli_num_rows($query);

	return $rows;
}

function total_no_of_gigs() {

	global $conn;
	$sql = "SELECT * FROM gig_data";

	$query = mysqli_query($conn, $sql);
	$rows = mysqli_num_rows($query);

	return $rows;
}