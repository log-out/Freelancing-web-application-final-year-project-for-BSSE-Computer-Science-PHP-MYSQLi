<?php include 'header.php'; ?>

<?php  
  if (isset($_GET['user'])) {
    $user = $_GET['user'];
  }

  $username = $_SESSION['username'];

?>

<?php  
  $sql = "UPDATE chat SET status = 'read' WHERE send_to = '{$username}' ";
  $query = mysqli_query($conn, $sql);

?>

<!-- <meta http-equiv="refresh" content="5;"> -->
<link rel="stylesheet" type="text/css" href="assets/css/chat.css">

<div class="container app" style="width: 70%; margin: 10px auto; margin-bottom: 40px;">
  <div class="row app-one">
    <!-- <div class="col-sm-2"></div> -->

    <div class="col-sm-12 conversation">
      <div class="row heading">
        <div class="col-sm-2 col-md-1 col-xs-3 heading-avatar">
          <div class="heading-avatar-icon">

<?php  
  $sql2 = "SELECT profileimage FROM users WHERE username = '{$user}' ";
  $query2 = mysqli_query($conn, $sql2);

  $row = mysqli_fetch_assoc($query2);


?>

          <img src="assets/images/profile_images/<?= $row['profileimage'] ?>">
          </div>
        </div>
        <div class="col-sm-8 col-xs-7 heading-name">
          <a class="heading-name-meta"><?= $user; ?>
          </a>
          <span class="heading-online">Online</span>
        </div>
        <div class="col-sm-1 col-xs-1  heading-dot pull-right">
          <i class="fa fa-ellipsis-v fa-2x  pull-right" aria-hidden="true"></i>
        </div>
      </div>

      <div class="row message" id="conversation">


<?php  

$sql = "SELECT * FROM chat WHERE username = '{$user}' OR send_by = '{$username}' ";

$query = mysqli_query($conn, $sql);

if ($query) {
  while ( $row = mysqli_fetch_assoc($query) ) { ?>

    <?php if ($row['username'] == $username): ?>
      <div class="row message-body">
        <div class="col-sm-12 message-main-sender">
          <div class="sender">
            <div class="" id="">
            <strong><?= $row['username']; ?>: </strong><?= $row['message_by']; ?>
            </div>
            <span class="message-time pull-right">
              <?= $row['date']; ?>
            </span>
          </div>
        </div>
      </div>
    <?php else: ?>
    

       <div class="row message-body">
        <div class="col-sm-12 message-main-reciver">
          <div class="receiver">
            <div class="" id="">
            <strong><?= $row['username']; ?>: </strong><?= $row['message_by']; ?>
            </div>
            <span class="message-time pull-right">
              <?= $row['date']; ?>
            </span>
          </div>
        </div>
      </div>

    <?php endif ?>

   
    
<?php }
}

?>

        
        <div id="show">
          
        </div>

        
      </div>

      <div class="row reply">
        <!-- <div class="col-sm-1 col-xs-1 reply-emojis">
          <i class="fa fa-smile-o fa-2x"></i>
        </div> -->
        <div class="col-sm-11 col-xs-9 reply-main">
          <input type="text" name="" placeholder="Write message and hit enter" class="form-control" id="message">
        </div>
        <!-- <div class="col-sm-1 col-xs-1 reply-recording">
          <i class="fa fa-microphone fa-2x" aria-hidden="true"></i>
        </div> -->
        <div class="col-sm-1 col-xs-1 reply-send">
          <i class="fa fa-send fa-2x" aria-hidden="true" id="txt_send"></i>
        </div>
      </div>
    </div>
    <!-- <div class="col-sm-2"></div> -->
  </div>
</div>





<script src="assets/js/jquery.js"></script>


<?php include 'footer.php'; ?>

<script>
  
$(document).ready(function() {


  $('#txt_send').click(function(event) {
    /* Act on the event */
    event.preventDefault();

    var message = $('#message').val();
    var send_to = '<?php echo $user; ?>'

    // $.post('includes/chat.php', {txt_message: message, user: send_to, txt_submit: true}, function(result) {
    //   alert(result);
    // });

    // setInterval(function() {
    //   $('#show').load('includes/load-chat.php')
    // }, 3000);

    $.ajax({
      url: 'includes/chat.php',
      type: 'post',
      data: {txt_message: message, user: send_to, txt_submit: true},
      success: function(response) {
        // $('#show').html(response);
      }
    })
    .done(function(result) {
      
    })
    .fail(function() {
      console.log("error");
    })
    .always(function() {
      console.log("complete");
    });

    $('#message').val("");
    location.reload(true);
    


  });

  $('#conversation').animate({
    scrollTop: $('#conversation').get(0).scrollHeight
   }, 0);

  

});



</script>
