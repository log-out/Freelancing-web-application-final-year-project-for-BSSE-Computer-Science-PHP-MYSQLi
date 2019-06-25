<?php  

include '../functions.php';

	if (isset($_POST['add_cat'])) {
		
		$category_name = mysqli_real_escape_string( $conn, $_POST['category_name'] );

		$category_slug = createSlug($category_name);

		$sql = "INSERT INTO categories(category_name, category_slug) VALUES
		('{$category_name}', '{$category_slug}') ";

		$query = mysqli_query($conn, $sql);
		if (!$query) {
			die(). mysqli_error($conn);
		} else {
			header("Location: ../category.php");
		}
	}

	if (isset($_POST['update_cat'])) {
		
		$category_name = mysqli_real_escape_string( $conn, $_POST['category_name'] );
		$category_id = $_POST['category_id'];

		$sql = "UPDATE categories SET category_name = '{$category_name}' WHERE id = '{$category_id}' ";

		$query = mysqli_query($conn, $sql);
		if (!$query) {
			die(). mysqli_error($conn);
		} else {
			header("Location: ../category.php");
		}
	}

	if (isset($_GET['delete']) && isset($_GET['cat_id'])) {
		$cat_id = $_GET['cat_id'];

		$sql = "DELETE FROM categories WHERE id = '{$cat_id}' ";

		$query = mysqli_query($conn, $sql);
		if (!$query) {
			die(). mysqli_error($conn);
		} else {
			header("Location: ../category.php");
		}
	}








?>