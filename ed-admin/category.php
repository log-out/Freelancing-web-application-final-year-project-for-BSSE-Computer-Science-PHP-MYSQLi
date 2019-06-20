<?php include 'header.php'; ?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <section class="content-header">
      <h1>
        Categories
        <small>View and edit all the categories</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">category</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
	
    <div class="row">
    	<div class="col-lg-5" style="">
    		<div class="box box-info">
    		  <div class="box-header with-border">
    		    <h3 class="box-title">Add New</h3>
    		  </div>
    		  <!-- /.box-header -->
    		  <!-- form start -->
    		  <form action="includes/category_process.php" method="post" class="form-horizontal">
    		    <div class="box-body">
    		      <div class="form-group">
    		        <label for="" class="col-sm-2 control-label">Name</label>

    		        <div class="col-sm-10">
    		          <input type="text" name="category_name" class="form-control" id="" placeholder="Category Name">
    		        </div>
    		      </div>
    		    </div>
    		    <!-- /.box-body -->
    		    <div class="box-footer">
    		      <button type="submit" name="add_cat" class="btn btn-info pull-right">Add</button>
    		    </div>
    		    <!-- /.box-footer -->
    		  </form>
    		</div>
    	</div>


<div class="col-lg-7">
	<div class="box">
    <!-- /.box-header -->
    <div class="box-body table-responsive">
      <table id="example2" class="table table-striped table-hover table-responsive">
     <thead>
        <tr>
        	<th>No.</th>
        	<th>Category Name</th>
        	<th>Category Slug</th>
        </tr>
    </thead>
    <tbody>

<?php  
	$sql = "SELECT * FROM categories";
	$i = 1;

	$query = mysqli_query($conn, $sql);
	if (!$query) {
		die(). mysqli_error($conn);
	} else {
		while ( $row = mysqli_fetch_assoc( $query ) ) { ?>

		<tr>
			<td><?= $i++; ?></td>
    		<td><?= $row['category_name'] ?>
    			<p>
    				<a href="#edit_cat" rel="modal:open">Edit</a> |
    				<a href="includes/category_process.php?delete=true&cat_id=<?= $row['id']; ?>">Delete</a>
    			</p>

    			<div id="edit_cat" class="modal">
    			  
    			  <div class="box box-info">
    			    <div class="box-header with-border">
    			      <h3 class="box-title">Add New</h3>
    			    </div>
    			    <!-- /.box-header -->
    			    <!-- form start -->
    			    <form action="includes/category_process.php" method="post" class="form-horizontal">
    			      <div class="box-body">
    			        <div class="form-group">
    			          <label for="" class="col-sm-2 control-label">Name</label>

    			          <div class="col-sm-10">
    			            <input type="text" value="<?= $row['category_name'] ?>" name="category_name" class="form-control" id="" placeholder="Category Name">
    			            <input type="hidden" value="<?= $row['id'] ?>" name="category_id" class="form-control" id="">
    			          </div>
    			        </div>
    			      </div>
    			      <!-- /.box-body -->
    			      <div class="box-footer">
    			        <button type="submit" name="update_cat" class="btn btn-info pull-right">Save</button>
    			      </div>
    			      <!-- /.box-footer -->
    			    </form>
    			  </div>

    			  <a href="#" rel="modal:close">Close</a>
    			</div>
				


    		</td>
    		<td><?= $row['category_slug'] ?></td>
    	</tr>
	
	<?php }
	}


?>

    </tbody>
</table>
</div>
</div>
    	</div>
    </div>

</section>


</div>



<?php include 'footer.php'; ?>