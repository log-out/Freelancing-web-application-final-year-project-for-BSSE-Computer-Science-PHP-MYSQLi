<?php include 'header.php'; ?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <section class="content-header">
      <h1>
        Users
        <small>Preview all registred users</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">users</li>
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
                  <th>Profile Image</th>
                  <th>Email</th>
                  <th>First Name</th>
                  <th>Last Name</th>
                  <th>username</th>
                  <th>Password</th>
                  <th>Phone</th>
                  <th>Profile Title</th>
                  <th>Skills</th>
                  <th>Certificate Name</th>
                  <th>Certificate Image</th>
                  <th>Security Question</th>
                  <th>Security Answer</th>
                  <th>Total Completed order</th>
                  <th>Profile Info</th>
                  <th>Profile Status</th>
                  <th>Profile Level</th>
                  <th>Success Score</th>
                  <th>Delivery on time</th>
                  <th>Order completetion</th>
                  <th>Rating</th>
                  <th>User IP</th>
                  <th>Date Created</th>
                  <th>Action</th>
         
                </tr>
                </thead>
                <tbody>

	<?php  
		$sql = "SELECT * FROM users";
		$query = mysqli_query($conn, $sql);
		if (!$query) {
			die(). mysqli_error($conn);
		} else {
			while ( $row = mysqli_fetch_assoc( $query ) ) { ?>

				<tr>
				  <td><?= $row['id']; ?></td>
				  <td>
				  <a href="../assets/images/profile_images/<?= $row['profileimage']; ?>" data-lightbox="image-1" data-title="<?= $row['profileimage']; ?>">
				  	<img width="50px" src="../assets/images/profile_images/<?= $row['profileimage']; ?>" alt="<?= $row['profileimage']; ?>">
				  </a>
				  </td>
				  <td>

				  	<?= $row['email']; ?>
				  	<p>
				  		<?php if ($row['profile_status'] == 'verified'): ?>
				  			<a href="includes/users_process.php?unverify=true&userid=<?= $row['id']; ?>">Unverify</a> |
				  		<?php elseif($row['profile_status'] == 'pending'): ?>
				  			<a href="includes/users_process.php?verify=true&userid=<?= $row['id']; ?>">Verify</a> | 
				  		<?php endif; ?>
				  		<a href="includes/users_process.php?delete=true&userid=<?= $row['id']; ?>">Delete</a>
				  	</p>
				  	
				  </td>
				  <td><?= $row['fname']; ?></td>
				  <td><?= $row['lname']; ?></td>
				  <td><?= $row['username']; ?></td>
				  <td><?= $row['password']; ?></td>
				  <td><?= $row['phone']; ?></td>
				  <td><?= $row['profile_title']; ?></td>
				  <td><?= $row['skills']; ?></td>
				  <td><?= $row['certificatename']; ?></td>
				  <td>
				  <?php if ($row['certificateimage']): ?>
				  	<a href="../assets/images/certificate_images/<?= $row['certificateimage'] ?>" data-lightbox="image-2" data-title="<?= $row['certificateimage'] ?>">View Certificate</a>
				  <?php endif ?>
				  	
				  </td>
				  <td><?= $row['securityquestion']; ?></td>
				  <td><?= $row['security_answer']; ?></td>
				  <td><?= $row['total_order_completed']; ?></td>
				  <td><p class="profile_info"><?= $row['profile_info']; ?></p></td>
				  <td><?= $row['profile_status']; ?></td>
				  <td><?= $row['profile_level']; ?></td>
				  <td><?= $row['success_score']; ?></td>
				  <td><?= $row['deliver_on_time']; ?></td>
				  <td><?= $row['order_completetion']; ?></td>
				  <td><?= $row['rating']; ?></td>
				  <td><?= $row['user_ip']; ?></td>
				  <td><?= $row['date']; ?></td>
				  

				</tr>



				
			<?php }
		}



	?>
                

                
                </tbody>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
</div>



<?php include 'footer.php'; ?>