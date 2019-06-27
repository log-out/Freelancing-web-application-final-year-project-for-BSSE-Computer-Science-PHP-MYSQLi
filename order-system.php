<?php include 'header.php'; ?>
<?php if (!is_session_set()) {
	header("Location: login.php");
} ?>
<div class="container">
	<div class="row">

	<div class="order-header">
		<div class="col-sm-8">
					<h1 class="title">Gig Title will be here </h1>
				</div>
				<div class="col-sm-4">
					<a href="#" class="btn btn-lg custom-button-2" data-toggle="modal" data-target="#myModal">Deliver Now</a>
				</div>
	</div><!-- order Header -->
		<div class="col-sm-8">
			<div class="order-system">
			<div class="tabbable-panel">
			<div class="tabbable-line">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#tab1" data-toggle="tab">Milestones & Earnings</a></li>
					<li><a href="#tab2" data-toggle="tab">Messages & Files</a></li>
					<li><a href="#tab3" data-toggle="tab">Terms & Settings</a></li>
				</ul>
				<div class="tab-content">
					<div class="tab-pane active" id="tab1">
						<ul class="sec">
							<li>Budget <br><span>$0.00</span></li>
							<li>In Escrow <br><span>$0.00</span></li>
							<li>Milestones Paid <br> <span>$0.00</span></li>
							<li>Remaining <br> <span>$0.00</span></li>
							<li>Total Earnings <br> <span>$0.00</span></li>
						</ul>

						<h1 class="Title">Count Down</h1>
						 <ul id="timer">
						 	<li id="days"></li>
						 	<li id="hours"></li>
						 	<li id="minutes"></li>
						 	<li id="seconds"></li>
						 </ul>
						 <h1 class="title">Job Details</h1>
						 <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras urna odio, cursus et mauris sed, mollis tempus arcu. Etiam turpis ipsum, facilisis vitae efficitur ut, consequat nec turpis. Phasellus tincidunt, sapien quis malesuada ullamcorper, purus nulla auctor eros, id pellentesque metus velit a sem. Quisque eget lobortis neque. Etiam pharetra enim vel diam luctus, ut cursus enim venenatis. Vestibulum commodo nulla sit amet nunc pretium, quis gravida felis porttitor. Maecenas sodales consectetur risus, nec eleifend lorem.

Mauris pulvinar nisl id ante vestibulum commodo. Fusce in ex scelerisque, ullamcorper nulla at, lobortis lorem. Proin nec eleifend sapien, ut venenatis mauris. Sed cursus molestie odio, id tempor turpis efficitur eget. Morbi gravida hendrerit leo, id gravida metus tempus sit amet. Aenean accumsan libero eu consequat elementum. Donec vel elit nec orci dapibus rhoncus. Proin varius velit vel sapien consectetur, a euismod neque vehicula. Pellentesque hendrerit neque non nunc vehicula rhoncus. Aenean nec dictum elit. Donec auctor est arcu, sed consectetur ex blandit nec. Praesent ex risus, condimentum ac elementum vitae, interdum vitae lorem. Aenean eros nulla, venenatis hendrerit nunc in, ultrices commodo velit. Praesent pulvinar risus vitae justo feugiat mollis. Vivamus vel molestie felis, id malesuada metus. </p>
					</div>
					<div class="tab-pane" id="tab2">
					<div class="message-box">
						<div class="col-sm-2">
							<img src="assets/images/dp.jpg" class="img-responsive chat-image">
						</div>

						<div class="col-sm-10">
							<a href="#" class="name">Aleem Sharif</a>
							<p class="message-body">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras urna odio, cursus et mauris sed, mollis tempus arcu. Etiam turpis ipsum, facilisis vitae efficitur ut, consequat nec turpis.
							</p>
						</div>
							
						</div><!-- Message box -->

						<div class="message-box-2">
						<div class="col-sm-10">
							<a href="#" class="name">Aleem Sharif</a>
							<p class="message-body">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras urna odio, cursus et mauris sed, mollis tempus arcu. Etiam turpis ipsum, facilisis vitae efficitur ut, consequat nec turpis.
							</p>
						</div>

						<div class="col-sm-2">
							<img src="assets/images/dp.jpg" class="img-responsive chat-image">
						</div>
							
						</div><!-- Message-box-2 -->

						<form class="chat-form">
							<label class="custom-file-upload">
    						<input type="file"/>
    						<i class="fa fa-upload"></i> Custom Upload
							</label>
							<input class="form-control" type="text" name="message" placeholder="Enter your Message">
							<input class="btn btn-md custom-button-2" type="submit" name="send" value="Send">
						</form>
					</div>
					<div class="tab-pane" id="tab3">
						<h1 class="title">Job Info</h1>
						<div class="col-sm-6">
						Start date
						</div>
						<div class="col-sm-6">
							<span class="date">February 14, 2019</span>
						</div>
						<hr>

						<div class="col-sm-6">
						Job ID
						</div>
						<div class="col-sm-6">
							<span class="id">100073</span>
						</div>
					</div>
					<div class="tab-pane" id="tab4">
						<a href="#">load</a>
					</div>
					
				</div><!-- tab content -->
			</div>
			</div>
			</div><!-- Order System -->
		</div>

		<div class="col-sm-4">
			<div class="side-bar-order">
				<p>Need to change of cancel your job</p>
				<a href="resolution.php" class="custom-button-2 btn btn-lg">Go to resoulation center</a>
			</div>
		</div>
	</div>
</div>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Deliver Job</h4>
      </div>
      <div class="modal-body">
        <form>
        	<label class="custom-file-upload">
    		<input type="file"/>
    		<i class="fa fa-upload"></i> Upload work
			</label>
			<textarea class="form-control" placeholder="Enter Job details here...">
				
			</textarea>
			<input type="submit" name="submit" value="Deliver Job" class="btn btn-md custom-button-2">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<?php include 'footer.php'; ?>