<?php include 'header-2.php'; ?>

<?php if (is_session_set()) {
    header("location:home.php");
} ?> 

<?php 
  if(isset($_POST['join_submit'])){
    $first_name =  mysqli_real_escape_string($conn, $_POST['fname'] );
    $last_name = mysqli_real_escape_string($conn, $_POST['lname']);
    $user_name = mysqli_real_escape_string($conn, $_POST['username'] );
    $email =mysqli_real_escape_string($conn, $_POST['email'] );
    $password = mysqli_real_escape_string($conn, $_POST['password'] );

    // validate username and email
    $sql = "SELECT * from users where username = '{$user_name}' OR email = '{$email}'";

    $run_query = mysqli_query($conn, $sql);
    if (!$run_query) {
      echo mysqli_error($conn);
      die();
    }

    while ($row = mysqli_fetch_array($run_query)) {
      $db_username = $row['username'];
      $db_email = $row['email'];

      if ($user_name == $db_username) { ?>

        <div class="alert alert-success alert-dismissable ed_alert">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
           <strong>Error!</strong>Username has been already taken. <a href="login.php">Try aganin</a> with another username
          <?php echo mysqli_error($conn); die(); ?>
        </div>
        
      <?php } elseif ($email == $db_email) { ?>

        <div class="alert alert-success alert-dismissable ed_alert">
          <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
           <strong>Error!</strong>Email has been already taken. <a href="login.php">Try again</a> with another email.
          <?php echo mysqli_error($conn); die(); ?>
        </div>
        
      <?php }
    }

    // password validation
    if (strlen($password) < 7 || strlen($password) > 15) { ?>
      <div class="alert alert-warning ed_alert">
        <strong>Warning!</strong> Password length should be 6 to 14. <a href="login.php">Try again</a> with another password.
        <?php die(); ?>
      </div>
   <?php }



    $query = "INSERT INTO users(fname, lname, username, email, password) values('$first_name', '$last_name', '$user_name', '$email', '$password')";
    $add_users = mysqli_query($conn, $query);
    if(!$add_users){
      die('Query Failed' .mysqli_error($conn));
    }
    else{
      $_SESSION['username'] = $user_name;
      $_SESSION['email'] = $email;
      header("location:home.php");
    }
  } elseif (isset($_POST['login_submit'])) {
    
    $email    = mysqli_real_escape_string( $conn, $_POST['email'] );
    $password = mysqli_real_escape_string( $conn, $_POST['password'] );

    $sql = "SELECT * FROM users";
    $run_query = mysqli_query($conn, $sql);

    if (!$run_query) {
      echo mysqli_error($conn);
      die();
    }

    while ($row = mysqli_fetch_assoc($run_query)) {
      $db_email     = $row['email'];
      $db_password  = $row['password'];
      $db_username  = $row['username'];
      if ($email == $db_email && $password == $db_password) {
        
        $_SESSION['username'] = $db_username;
        $_SESSION['email'] = $db_email;
        echo "<script type='text/javascript'> document.location = 'home.php'; </script>";
        // header("location:home.php");

      } 
    }

  }





 ?>
  <div class="form login-form">
      
      <ul class="tab-group">
        <li class="tab active"><a href="#signup">Sign Up</a></li>
        <li class="tab"><a href="#login">Log In</a></li>
      </ul>
      
      <div class="tab-content">
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form action="" method="post">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name="fname" />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name="lname" />
            </div>
          </div>

           <div class="field-wrap">
            <label>
              User Name<span class="req">*</span>
            </label>
            <input type="text"required autocomplete="off" name="username" />
          </div>

          <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email"required autocomplete="off" name="email" />
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name="password" />
          </div>
          
          <input type="submit" class="button button-block"/ name="join_submit" value="Get Started">
          </form>

        </div>
        
        <div id="login">   
          <h1>Welcome Back!</h1>
          
          <form action="" method="post">
          
            <div class="field-wrap">
            <label>
              Email Address<span class="req">*</span>
            </label>
            <input type="email" name="email" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req">*</span>
            </label>
            <input type="password" name="password" required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <input type="submit" name="login_submit" class="button button-block" value="Log In" />
          
          </form>

        </div>
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="assets/js/index.js"></script>



<?php include 'footer.php'; ?>
