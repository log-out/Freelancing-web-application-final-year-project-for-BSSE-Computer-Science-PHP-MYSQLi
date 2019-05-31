<?php 

     // load profile data
     $profile_data = load_my_profile_data();
     $profile_data = @$profile_data[0];

?>

  <div class="right_sidebar">
               
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
                    <p class="profile_title"><?= $profile_data['profile_title']; ?></p>
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