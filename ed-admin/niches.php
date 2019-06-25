<?php include 'header.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Niches
        <small>Preview All Niches</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Niches</li>
      </ol>
    </section>

     <!-- Main content -->
    <section class="content">
    	
    	<div class="row">
    		<div class="col-xs-12">
    			<div class="box">

    <!-- /.box-header -->
      <div class="box-body table-responsive">
          <table id="example2" class="table table-bordered table-hover table-responsive">
          	<thead>
          		<tr>
          			<th>Id</th>
          			<th>Username</th>
          			<th>Niche Title</th>
          			<th>Niche Categories</th>
          			<th>Niche Price</th>
          			<th>Niche Tag</th>
          			<th>Niche Image</th>
          			<th>Niche Desc</th>
          			<th>Niche Rating</th>
          			<th>Order Completed</th>
          			<th>Order In Queue</th>
          			<th>Niche add date</th>
          		</tr>
          	</thead>
          	<tbody>

<?php  
	
	$sql = "SELECT * FROM gig_data";
	$query = mysqli_query($conn, $sql);

	while ($row = mysqli_fetch_assoc($query)) { ?>

		<tr>
          	<td><?= $row['id']; ?></td>		
          	<td><?= $row['username']; ?></td>		
          	<td><?= $row['niche_title']; ?></td>		
          	<td><?= $row['niche_category']; ?></td>		
          	<td>$<?= $row['niche_price']; ?></td>		
          	<td><?= $row['niche_tag']; ?></td>		
          	<td>
          		<?php if ($row['niche_image']): ?>
				  	<a href="../assets/images/gig_images/<?= $row['niche_image']; ?> ?>" data-lightbox="image-2" data-title="<?= $row['niche_image']; ?>">Niche Image</a>
				  <?php endif; ?>
          	</td>		
          	<td><p class="niche_desc"><?= $row['niche_desc']; ?></p></td>		
          	<td><?= $row['niche_rating']; ?></td>		
          	<td><?= $row['order_completed']; ?></td>		
          	<td><?= $row['order_in_queue']; ?></td>		
          	<td><?= $row['niche_add_date']; ?></td>		
        </tr>

<?php }


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