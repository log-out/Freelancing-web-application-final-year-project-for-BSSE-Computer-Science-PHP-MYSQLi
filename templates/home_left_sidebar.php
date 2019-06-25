<div class="cat_bg">

<h3 class="cat_title">Categories</h3>
<?php 

$sql = "SELECT * FROM categories";
$query = mysqli_query($conn, $sql);
if (!$query) {
	die() . mysqli_error($conn);
} else {
	while ( $row = mysqli_fetch_assoc($query) ) { ?>

   <p class="cat_name"><a href="category.php?cat=<?= $row['category_slug']; ?>"><?= $row['category_name']; ?></a></p>
		 
	<?php }
}


?>

</div>