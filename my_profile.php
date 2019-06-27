<?php include 'header.php'; ?>

<?php include_once 'templates/verified_notice.php'; ?>


<?php 

if (isset($_GET['user'])) {
     $user = $_GET['user'];
     $sql = "SELECT * FROM users WHERE username = '{$user}' ";
     $query = mysqli_query($conn, $sql);
     $profile_data= mysqli_fetch_assoc($query);

} else {
	// load profile data
	$profile_data = load_my_profile_data();
	$profile_data = @$profile_data[0];
}

?>

<div class="row" style="margin: 30px auto;">
	<div class="col-lg-4">
	    <!-- Profile Overview -->
          <div class="bg_white">
               
               <div class="profile_img">
               	<?php if ($profile_data['profileimage']): ?>
               		<img src="assets/images/profile_images/<?= $profile_data['profileimage'] ?>" alt="">
               	<?php else: ?>
					<img src="assets/images/user_thumbnail.png" alt="">
               	<?php endif; ?>
                    
               </div>
               <div class="profile_data">
                    <h3 class="profile_name"><?= $profile_data['fname'] . ' ' . $profile_data['lname'] ?>  <?php if (get_profile_status() == 'verified'): ?>
                    	<a href="#" data-toggle="tooltip" title="This profile has been verified by our team!"><span class="badge badge-success">verified</span></a>
                    <?php endif ?></h3>

					<?php if (!$profile_data['profile_title']): ?>
						<p id="ptitle" class="profile_title">Enter your profile title in a few words. <a href="#" id="edit_ptitle"> <span style="font-size: 15px; margin-left: 10px;" class="fa fa-pencil-alt"></span></a></p>
					<?php else: ?>
                    	<p id="ptitle" class="profile_title"><?= $profile_data['profile_title']; ?> 
          <?php if (isset($_GET['user'])) {
               if ($_GET['user'] != $_SESSION['username']) { 
                   echo "";
               } 
          } else { ?>
               <a href="#" id="edit_ptitle"> <span style="font-size: 15px; margin-left: 10px;" class="fa fa-pencil-alt"></span></a>
          <?php } ?>
                         
                    </p>
                	<?php endif; ?>
					
					<div class="ed_hide" id="ptitle_field">
                    	<input type="text" id="edit_ptitle_field" value="<?= $profile_data['profile_title']; ?>" class="edit_ptitle">
                    	<button class="ptitle_btn" id="update_ptitle">Save</button>
                    </div>


                    <p class="profile_rating">
                         <i class="fa fa-star"></i> 
                         <strong> <?= $profile_data['rating'] ?>.0</strong> (<?= $profile_data['total_order_completed'] ?>)
                    </p>
               </div>

               <hr>
                
                <h4>Job Success Score</h4>
               <div class="progress">

                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:<?= $profile_data['success_score']; ?>%">
                         <?= $profile_data['success_score']; ?>%
                    </div>
               </div>    

               <h4>Delivered on time</h4>
               <div class="progress">

                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:<?= $profile_data['deliver_on_time']; ?>%">
                         <?= $profile_data['deliver_on_time']; ?>%
                    </div>
               </div>    

               <h4>Order Completetion</h4>
               <div class="progress">

                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:<?= $profile_data['order_completetion']; ?>%">
                         <?= $profile_data['order_completetion']; ?>%
                    </div>
               </div>    

               <h4>Rating</h4>
               <div class="progress">

                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:<?= $profile_data['rating']; ?>%">
                         <?= $profile_data['rating']; ?>%
                    </div>
               </div>
				
				</div>

               		

               <div class="bg_white">
				<?php if ($profile_data['profile_info']): ?>
               	<form action="" class="ed_hide" id="show_form">
               		<div class="form-group">
               			<textarea name="" id="info_text" placeholder="Enter About Your Skills" class="form-control" cols="30" rows="6"><?= $profile_data['profile_info']; ?></textarea>
               			<p class="field_desc">Write a brief description about you, your skills, your work experience.</p>
               		</div>
               		<div class="form-group">
               			<input type="submit" id="info_submit" value="Save" class="btn btn-md btn-primary">
               		</div>
               	</form>
				<?php endif; ?>

               	<?php if (!$profile_data['profile_info']): ?>
               		<form action="" id="hide_form">
               			<div class="form-group">
               				<textarea name="" id="info_text" placeholder="Enter About Your Skills" class="form-control" cols="30" rows="6"></textarea>
               				<p class="field_desc">Write a brief description about you, your skills, your work experience.</p>
               			</div>
               			<div class="form-group">
               				<a href="#" id="info_submit" class="btn btn-md btn-primary">Save</a>
               			</div>
               		</form>
               	<?php else: ?>
               	
               	<div class="row" id="remove_info">
               		<div class="col-lg-11">
               			<p id="show_pinfo"><?= $profile_data['profile_info']; ?></p>
               		</div>
               		<div class="col-lg-1">
          <?php if (isset($_GET['user'])) {
               if ($_GET['user'] != $_SESSION['username']) { 
                   echo "";
               } 
          } else { ?>
               <a href="#" id="show_info_form"><span class="fa fa-edit"></span></a>
          <?php } ?>                    
               			
               		</div>
               	</div>

               <?php endif; ?>
              </div>   

            <div class="bg_white">
               		
            </div>




          
	</div>

	<?php include_once 'templates/profile_niche.php'; ?>


</div>





<?php include 'footer.php'; ?>