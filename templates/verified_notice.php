<?php if (get_profile_status() == 'pending'): ?>
	<div class="container" style="margin: 20px auto; width: 100%;">
	  <div class="panel-group">
	    <div class="panel panel-default">
	      <div class="panel-heading">
	        <h4 class="panel-title">
	          <a data-toggle="collapse" href="#collapse1"><strong>Notice:</strong> Your profile is not verified by our team yet. click me for more</a>
	        </h4>
	      </div>
	      <div id="collapse1" class="panel-collapse collapse">
	        <div class="panel-body">
	        	<p>Your profile is not verified by our team yet, by verifing your profile you will get the following benifits: </p>
	        	<ul>
	        		<li>VIP customer support</li>
	        		<li>Get <span class="badge">verified</span> badge on your profile</li>
	        		<li>Increase your sale</li>
	        		<li>High priorty in search engine</li>
	        	</ul>
	        	<p><a href="register.php">click here</a> to verify your profile now</p> 
	        	<p><strong>Note: </strong>You are still able to perform all the action. You can add gig, apply for job, search for job even you can do everything.</p>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
<?php endif ?>