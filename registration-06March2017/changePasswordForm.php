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
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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
            <li><a href="homeAuth.php" id="">Home</a></li>
            <li><a href="aboutUsAuthForm.php" id="">About</a></li>
            <li><a href="contactUsAuthForm.php" id="">Contact</a></li>
            <li><a href="projectsAuthForm.php" id="">Projects</a></li>
            <li><a href="suggestionsAuthForm.php" id="suggestionsAuth-page-link">Suggestions</a></li>
            <li><a href="feedbackAuthForm.php" id="">Feedback</a></li>
          </ul>
		  <ul class="nav navbar-nav navbar-right">
		  <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
          <?php echo $_SESSION["email"] ?>
          <span class="caret"></span>
        </button>
		  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">            
			<li><a href="#">Change Password</a></li>
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
				<form id="change-password-form" action="changePassword.php" method="post" role="form" data-toggle="validator" class="">
					<div class="col-8 form-group controls">
						<label for="lastName">Old Password:</label>
						<input type="password" class="form-control" id="userOldPassword" name="userOldPassword" required pattern="^(?=.*[0-9])(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z])[a-zA-Z0-9!@#$%^&*]{6,16}$" placeholder="Enter password">
						<div class="help-block with-errors"></div>
					</div>
					<div class="col-8 form-group controls">
						  <label for="lastName">New Password:</label>
						  <input type="password" class="form-control" id="userPassword" name="userPassword" required pattern="^(?=.*[0-9])(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z])[a-zA-Z0-9!@#$%^&*]{6,16}$" data-toggle="hover" data-trigger="hover" data-html="true" data-content="Password should contain : <br/> 1) Minimum 6 maximum 16 characters.<br/> 2) Atleast 1 alphabet in uppercase.<br/> 3) Atleast 1 alphabet in lowercase.<br/> 4) Atleast 1 special character.<br/> 5) Atleast 1 numeric value.<br/>"  placeholder="Enter password"><span id='message1'></span>
						  <div class="help-block with-errors"></div>
						  
					</div>
					<div class="col-8 form-group controls">
					  <label for="lastName">Confirm Password:</label>
					  <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required pattern="^(?=.*[0-9])(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z])[a-zA-Z0-9!@#$%^&*]{6,16}$" data-toggle="hover" data-trigger="hover" data-html="true" data-content="Password should contain : <br/> 1) Minimum 6 maximum 16 characters.<br/> 2) Atleast 1 alphabet in uppercase.<br/> 3) Atleast 1 alphabet in lowercase.<br/> 4) Atleast 1 special character.<br/> 5) Atleast 1 numeric value.<br/>" placeholder="Enter password"><span id='message'></span> 
					  <div class="help-block with-errors"></div>
					</div>
					<div class="col-8 form-group controls">
						<button type="submit" id="submit" class="btn btn-success"></i> Change Password</button>						  
						<div id="msgSubmit" class="h3 text-center hidden"></div> 
						<div><?php
						if(isset($_SESSION["changePasswordMessage"]))
						{
							echo $_SESSION["changePasswordMessage"];
						}
						unset($_SESSION["changePasswordMessage"]);
						?></div>
						<div class="clearfix"></div>
					</div>											
				</form>			
		</div>
	</div>
</div>
<script>
$(document).ready(function(){
    $('[data-toggle="hover"]').popover();   
});
</script>

</body>
</html>
