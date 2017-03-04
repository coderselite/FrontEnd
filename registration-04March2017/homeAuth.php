<?php
session_start();
if(!empty($_SESSION["email"])){
}
else{
  header("HTTP/1.1 403 Forbidden");
      exit;
   }
?>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
  <link rel="stylesheet" href="css/style_images.css" media="screen">  
  <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
  <script src="js/script_images.js"></script>
  <script src="js/login.js"></script>
  <script src="js/feedback.js"></script>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
<hr/><hr/>
<div class="container-fluid" style="background-color: #hhcc;">
    <!-- Second navbar for categories -->
    <nav class="navbar navbar-default" style="bg-color: #ffcc">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->    
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
          <ul class="nav navbar-nav navbar-left">
            <li><a href="#" id="">Home</a></li>
            <li><a href="aboutUsAuthForm.php" id="">About</a></li>
            <li><a href="contactUsAuthForm.php" id="">Contact</a></li>
            <li><a href="projectsAuthForm.php" id="">Projects</a></li>
            <li><a href="suggestionsAuthForm.php" id="">Suggestions</a></li>
            <li><a href="feedbackAuthForm.php" id="">Feedback</a></li>
          </ul>
		  <ul class="nav navbar-nav navbar-right">
		  <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
          <?php echo $_SESSION["email"] ?>
          <span class="caret"></span>
        </button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">            
            <li><a href="changePasswordForm.php">Change Password</a></li>
			<li><a href="editProfileForm.php">Edit Profile</a></li>
            <li><a href="home.php">Logout</a></li>
          </ul>

      </div>
		  </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->
</div><!-- /.container-fluid -->
<hr/><hr/>
 
<div class="container">
  <div class="row">
	<div class="col-md-6 col-md-offset-3">
	  <hr/>
		<div class="row">
			<div class="col-lg-12">
			  
			  <div id="home-page" class="row">
				<hr>
				<address>
				<strong>Home page</strong><br>
				</address>			  
        </div>
        
        <div id="aboutUs-page" class="row hidden">
				<hr>
				<address>
				<strong>About Us page</strong><br>
				</address>			  
        </div>
        
			  <div id="contactUs-page" class="row hidden">				
				<h3>Feel free to contact us at: </h3>
				<hr>
				<address>
				<strong>Pune address:</strong> Dummy,<br>
				<strong>Phone:</strong> xxx-xxx-xxxx ,<br> 
				<strong>Email:</strong> coderselite@gmail.com ,<br>
				<strong>Facebook page:</strong> Dummy ,<br>
				</address>			  
        </div>        
        <form id="suggestionAuth-form" action="suggestion.php" method="post" role="form" style="" class="hidden">
				<div class="col-10 form-group">
				  <label for="firstName">Title:</label>
				  <input type="text" class="form-control" id="title" name="title" required pattern="[A-Za-z]{3,15}" title="Please enter a valid first name" placeholder="Enter title">
				</div>
				<div class="col-10 form-group">
				  <label for="lastName">Technology:</label>
				  <input type="text" class="form-control" id="technology" name="technology" required pattern="[A-Za-z]{1,20}" title="Please enter a valid last name" placeholder="Enter technolgy">
				</div>				
				<div class="col-10 form-group">
				  <label for="description">Description:</label>
				  <textarea class="form-control" rows="5" id="description" name="description" placeholder="Enter Description" required></textarea>
				</div>
				<div class="form-group">
					<button class="btn btn-success btn-md" type="submit">Save</button>                              
				</div>
		</form>
        
        <div id="feedbackAuth-page" class="hidden">
        <div class="row" style="margin-top:40px;">
          <div class="col-md-12">
            <div class="well well-sm">
                  <div class="text-right">
                      <a class="btn btn-success btn-green" href="#reviews-anchor" id="open-review-box">Leave a Review</a>
                  </div>
              
                  <div class="row" id="post-review-box" style="display:none;">
                      <div class="col-md-12">
                          <form accept-charset="UTF-8" action="feedback.php" method="post">
                              <input id="ratings-hidden" name="rating" type="hidden"> 
                              <textarea class="form-control animated" cols="50" id="new-review" name="comment" placeholder="Enter your review here..." rows="5"></textarea>
                              <br>
                              <div class="text-right">
                                  <div class="stars starrr" name="rating" data-rating="0" style="font-size: 300%;"></div><br>
                                  <a class="btn btn-danger btn-md" href="#" id="close-review-box" style="display:none; margin-right: 10px;">
                                  <span class="glyphicon glyphicon-remove"></span>Cancel</a>                            
                                  <button class="btn btn-success btn-md" type="submit">Save</button>
                              </div>
                          </form>
                      </div>
                  </div>
              </div> 
               
          </div>
        </div>
        </div>
        <form id="change-password-form" action="" method="post" role="form" data-toggle="validator" class="hidden">
        <div class="col-8 form-group controls">
			<label for="lastName">Old Password:</label>
			<input type="password" class="form-control" id="userOldPassword" name="userOldPassword" required pattern="[A-Za-z]{4,20}" title="Please enter your password" placeholder="Enter password">
			<div class="help-block with-errors"></div>
		</div>
		<div class="col-8 form-group controls">
		  <label for="lastName">New Password:</label>
		  <input type="password" class="form-control" id="userPassword" name="userPassword" required pattern="[A-Za-z]{4,20}" title="Please enter your password" placeholder="Enter password"><span id='message1'></span>
          <div class="help-block with-errors"></div>
		</div>
		<div class="col-8 form-group controls">
		  <label for="lastName">Confirm Password:</label>
		  <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required pattern="[A-Za-z]{4,20}" title="Please enter your password" placeholder="Enter password"><span id='message'></span> 
		  <div class="help-block with-errors"></div>
		</div>
		<button type="submit" id="submit" class="btn btn-success"></i> Change Password</button>
        <div id="msgSubmit" class="h3 text-center hidden"></div> 
        <div class="clearfix"></div>
		</form>           
					</div>
				</div>
			</div>
		</div>
	</div>
  </div>
</div>

</body>
</html>
