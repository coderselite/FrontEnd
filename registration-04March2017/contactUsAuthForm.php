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
            <li><a href="homeAuth.php" id="">Home</a></li>
            <li><a href="aboutUsAuthForm.php" id="">About</a></li>
            <li><a href="#" id="">Contact</a></li>
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
				<div id="contactUs-page" class="row">				
					<h3>Feel free to contact us at: </h3>
					<hr>
					<address>
					<strong>Pune address:</strong> Dummy,<br>
					<strong>Phone:</strong> xxx-xxx-xxxx ,<br> 
					<strong>Email:</strong> coderselite@gmail.com ,<br>
					<strong>Facebook page:</strong> Dummy ,<br>
					</address>			  
				</div>
			</div>
		</div>
	</div>
  </div>
</div>