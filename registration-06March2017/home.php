<?php
session_start();

unset($_SESSION["email"]);
unset($_SESSION["user_password"]);
session_destroy();
?>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/jquery-min.js"></script>      
  <script type="text/javascript" src="js/form-validator.min.js"></script>  
  <script type="text/javascript" src="js/contact-form-script.js"></script>
  <script src="js/script_images.js"></script>
  <script src="js/login.js"></script>
  <script src="js/script.js"></script>
  <link rel="stylesheet" href="/registration/css/style.css">
</head>
<body>
<hr/><hr/>
<div id="menubar" class="container-fluid" style="background-color: #hhcc;">
    <!-- Second navbar for categories -->
    <nav class="navbar navbar-default" style="bg-color: #ffcc">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="navbar-collapse-1">
          <ul class="nav navbar-nav navbar-left">
            <li><a href="#" id="">Home</a></li>
            <li><a href="aboutUsForm.php" id="">About</a></li>
            <li><a href="contactUsForm.php" id="">Contact</a></li>
            <li><a href="projectsForm.php" id="">Projects</a></li>
            <li><a href="suggestionsForm.php" id="">Suggestions</a></li>
            <li><a href="feedbackForm.php" id="">Feedback</a></li>
          </ul>
		  <ul class="nav navbar-nav navbar-right">
		  <li><a href="loginForm.php" class="" id="">Login</a></li>
		  <li><a href="registrationForm.php" id="">Register</a></li>
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
        <form id="forgot-password-page"  action="" method="post" role="form" class="hidden">
          <div class="col-8 form-group">
            <label for="email">Email Id:</label>
            <input type="email" class="form-control" id="registeredEmail" name="registeredEmail" placeholder="Enter registered email id" required>
          </div> 
          <div class="form-group">
          <br>
				  <div class="col-8">
					<button type="submit" id="feedbackAuth-page-link" class="form-control btn btn-success">Submit</button>
				  </div>
				</div>
        </form>
               
        <div id="home-page" class="row">
				<hr>
				<address>
				<strong>Home page</strong><br>
        <div class="col-8">
              <div class="text-center">
                <?php if(isset($message_register)) { ?>
                <div class="message"><?php echo $_SESSION["message_register"] ?></div>
                <?php unset($SESSION_["message_register"]);
                 } ?>
              </div>
            </div>
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
        
        <div id="projects-page" class="row hidden">
				<hr>
				<address>
				<strong>Please login before you proceed</strong><br>
				</address>			  
        </div>
        
        <div id="suggestions-page" class="row hidden">
				<hr>
				<address>
				<strong>Please login before you proceed</strong><br>
				</address>
			  </div>
        </div>        
			</div>
		</div>
	</div>
  </div>
</div>

</body>


</html>
