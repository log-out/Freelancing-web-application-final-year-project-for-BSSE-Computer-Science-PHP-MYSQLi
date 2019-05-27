<?php include 'header.php'; ?>

<?php include_once 'templates/verified_notice.php'; ?>

<?php 

	// load profile data
	$profile_data = load_my_profile_data();
	$profile_data = @$profile_data[0];

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
                    	<span class="badge badge-success">verified</span>
                    <?php endif ?></h3>
                    <p class="profile_title">Professional WordPress Developer</p>
                    <p class="profile_rating">
                         <i class="fa fa-star"></i> 
                         <i class="fa fa-star"></i> 
                         <i class="fa fa-star"></i> 
                         <i class="fa fa-star"></i> 
                         <i class="fa fa-star"></i> <strong> 5.0</strong> (101)
                    </p>
               </div>

               <hr>
                
                <h4>Job Success Score</h4>
               <div class="progress">

                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:90%">
                         90%
                    </div>
               </div>    

               <h4>Delivered on time</h4>
               <div class="progress">

                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:99%">
                         99%
                    </div>
               </div>    

               <h4>Order Completetion</h4>
               <div class="progress">

                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
                         100%
                    </div>
               </div>    

               <h4>Rating</h4>
               <div class="progress">

                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
                         100%
                    </div>
               </div>
				
				</div>

               		

               <div class="bg_white">

               	<form action="" class="ed_hide" id="show_form">
               		<div class="form-group">
               			<textarea name="" id="info_text" placeholder="Enter About Your Skills" class="form-control" cols="30" rows="6"><?= $profile_data['profile_info']; ?></textarea>
               			<p class="field_desc">Write a brief description about you, your skills, your work experience.</p>
               		</div>
               		<div class="form-group">
               			<input type="submit" id="info_submit" value="Save" class="btn btn-md btn-primary">
               		</div>
               	</form>

               	<?php if (!$profile_data['profile_info']): ?>
               		<form action="" id="hide_form">
               			<div class="form-group">
               				<textarea name="" id="info_text" placeholder="Enter About Your Skills" class="form-control" cols="30" rows="6"></textarea>
               				<p class="field_desc">Write a brief description about you, your skills, your work experience.</p>
               			</div>
               			<div class="form-group">
               				<input type="submit" id="info_submit" value="Save" class="btn btn-md btn-primary">
               			</div>
               		</form>
               	<?php endif ?>
               	

               	<div class="row" id="remove_info">
               		<div class="col-lg-11">
               			<p id="show_pinfo"><?= $profile_data['profile_info']; ?></p>
               		</div>
               		<div class="col-lg-1">
               			<a href="#" id="show_info_form"><span class="fa fa-edit"></span></a>
               		</div>
               		
               		
               	</div>
              </div>   

            <div class="bg_white">
               		
            </div>




          
	</div>

	<div class="col-lg-8">
		<div class="bg_white">
			<div class="row">

			

				<div class="col-lg-4 fix_pad">
				     <div class="niche_card">
				          <div class="niche_image">
				               <!-- <img src="assets/images/fiverr-wordpress-gig-2.jpg" alt="" width="100%"> -->
				          </div>
				          <div class="niche_body">
				               <div class="niche_owner">
				                    <div class="owner_img">
				                         <a href="gig-single.php"><img src="assets/images/dp.jpg" alt=""></a>
				                    </div>
				                    <div class="owner_name">
				                         <h4><a href="my_profile.php">Waqas Saleem</a></h4>
				                         <p class="level">Level 2</p>
				                    </div>
				               </div>
				               <div class="niche_title">
				                    <h4><a href="gig-single.php">I will create an awesome wordpress design for you</a></h4>
				               </div>
				               <div class="">
				                    <p class="pull-left rating">
				                         <i class="fa fa-star"></i> 5.0 (101)
				                    </p>
				                    <p class="pull-right"><b>$55</b></p>
				               </div>
				               <div class="clearfix"></div>
				          </div>
				          
				  </div>
				</div>

				<div class="col-lg-4 fix_pad">
				     <div class="niche_card">
				          <div class="niche_image">
				               <!-- <img src="assets/images/fiverr-wordpress-gig-2.jpg" alt="" width="100%"> -->
				          </div>
				          <div class="niche_body">
				               <div class="niche_owner">
				                    <div class="owner_img">
				                         <a href="gig-single.php"><img src="assets/images/dp.jpg" alt=""></a>
				                    </div>
				                    <div class="owner_name">
				                         <h4><a href="my_profile.php">Waqas Saleem</a></h4>
				                         <p class="level">Level 2</p>
				                    </div>
				               </div>
				               <div class="niche_title">
				                    <h4><a href="gig-single.php">I will create an awesome wordpress design for you</a></h4>
				               </div>
				               <div class="">
				                    <p class="pull-left rating">
				                         <i class="fa fa-star"></i> 5.0 (101)
				                    </p>
				                    <p class="pull-right"><b>$55</b></p>
				               </div>
				               <div class="clearfix"></div>
				          </div>
				          
				  </div>
				</div>

				<div class="col-lg-4 fix_pad">
				     <div class="niche_card">
				          <div class="niche_image">
				               <!-- <img src="assets/images/fiverr-wordpress-gig-2.jpg" alt="" width="100%"> -->
				          </div>
				          <div class="niche_body">
				               <div class="niche_owner">
				                    <div class="owner_img">
				                         <a href="gig-single.php"><img src="assets/images/dp.jpg" alt=""></a>
				                    </div>
				                    <div class="owner_name">
				                         <h4><a href="my_profile.php">Waqas Saleem</a></h4>
				                         <p class="level">Level 2</p>
				                    </div>
				               </div>
				               <div class="niche_title">
				                    <h4><a href="gig-single.php">I will create an awesome wordpress design for you</a></h4>
				               </div>
				               <div class="">
				                    <p class="pull-left rating">
				                         <i class="fa fa-star"></i> 5.0 (101)
				                    </p>
				                    <p class="pull-right"><b>$55</b></p>
				               </div>
				               <div class="clearfix"></div>
				          </div>
				          
				  </div>
				</div>

				<div class="col-lg-4 fix_pad">
				     <div class="niche_card">
				          <div class="niche_image">
				               <!-- <img src="assets/images/fiverr-wordpress-gig-2.jpg" alt="" width="100%"> -->
				          </div>
				          <div class="niche_body">
				               <div class="niche_owner">
				                    <div class="owner_img">
				                         <a href=""><img src="assets/images/dp.jpg" alt=""></a>
				                    </div>
				                    <div class="owner_name">
				                         <h4><a href="#">Waqas Saleem</a></h4>
				                         <p class="level">Level 2</p>
				                    </div>
				               </div>
				               <div class="niche_title">
				                    <h4><a href="">I will create an awesome wordpress design for you</a></h4>
				               </div>
				               <div class="">
				                    <p class="pull-left rating">
				                         <i class="fa fa-star"></i> 5.0 (101)
				                    </p>
				                    <p class="pull-right"><b>$55</b></p>
				               </div>
				               <div class="clearfix"></div>
				          </div>
				          
				  </div>
				</div>

				<div class="col-lg-4 fix_pad">
				     <div class="niche_card">
				          
				          <div class="gig-add">
				          	<a href="gig-form.php"><i class="fa fa-plus-circle"></i></a>
				          	<h4>Create A New Niche</h4>
				          </div><!-- Gig Add -->
				          
				  </div>
				</div>

			</div>



		</div>
	</div>
</div>





<?php include 'footer.php'; ?>