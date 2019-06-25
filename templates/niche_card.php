<?php 
     $profile_data = load_my_profile_data(); 
     $profile_data = @$profile_data[0];
?>


<div class="col-lg-3 fix_pad">
    <div class="niche_card">
         <div class="niche_image" style="background-image: url(assets/images/gig_images/<?php echo $niche_image; ?>)">
              <!-- <img src="assets/images/fiverr-wordpress-gig-2.jpg" alt="" width="100%"> -->
         </div>
         <div class="niche_body">
              <div class="niche_owner">
                   <div class="owner_img">
                        <a href="gig-single.php"><img src="assets/images/profile_images/<?= $profile_data['profileimage']; ?>" alt=""></a>
                   </div>
                   <div class="owner_name">
                       <h4 class="text-capitalize"><a href="my_profile.php"><?= $profile_data['fname'] . ' ' . $profile_data['lname']; ?></a></h4>
                        <p class="level">Level <?= $profile_data['profile_level']; ?></p>
                   </div>
              </div>
              <div class="niche_title">
                  <h4><a href="gig-single.php?id=<?= $id; ?>"><?= $niche_title; ?></a></h4>
              </div>
              <div class="">
                   <p class="pull-left rating">
                        <i class="fa fa-star"></i> <?= $niche_rating; ?>.0 (<?= $order_completed; ?>)
                   </p>
                   <p class="pull-right"><b>$<?= $niche_price; ?></b></p>
              </div>
              <div class="clearfix"></div>
         </div>
         
 </div>
</div>