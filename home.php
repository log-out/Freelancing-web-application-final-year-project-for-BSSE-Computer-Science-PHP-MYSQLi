<?php include 'header.php'; ?>

<div class="row">
<div class="col-lg-2">
     <?php include_once 'templates/home_left_sidebar.php'; ?> 
</div>
     <div class="col-lg-7">
          <!-- Jobs and Niche -->

     <div class="" style="margin-top: 40px;">

      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#niche"><b>Niche</b></a></li>
        <li><a data-toggle="tab" href="#jobs"><b>Jobs</b></a></li>
      </ul>

      <div class="tab-content" style="border: 1px solid #ddd; border-top: 0px; padding: 20px;">
     <div id="niche" class="tab-pane fade in active">
          <!-- <h3>Niche</h3> -->
        <?php include_once 'templates/home_niche_tab.php'; ?>

          
     </div>
          
          
     <div id="jobs" class="tab-pane fade">
           
          <?php include_once 'templates/home_jobs_tab.php'; ?>

     </div>

          
        </div>
        
      </div>

    </div>


     <div class="col-lg-3">
          <!-- Profile Overview -->
          <?php include_once 'templates/home_right_sidebar.php'; ?>
     </div>

     </div> <!-- col-lg-7 -->
     




<?php include 'footer.php'; ?>