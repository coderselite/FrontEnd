<?php
session_start();



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
  <script type="text/javascript" src="js/jquery-min.js"></script>      
  <script type="text/javascript" src="js/form-validator.min.js"></script>  
  <script type="text/javascript" src="js/contact-form-script.js"></script>
  <link rel="stylesheet" href="css/style.css">
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
            <li><a href="home.php" id="">Home</a></li>
            <li><a href="#" id="aboutUs-page-link">About</a></li>
            <li><a href="#" id="contactUs-page-link">Contact</a></li>
            <li><a href="#" id="projects-page-link">Projects</a></li>
            <li><a href="#" id="suggestions-page-link">Suggestions</a></li>
            <li><a href="#" id="feedback-page-link">Feedback</a></li>
          </ul>
		  <ul class="nav navbar-nav navbar-right">
		  <li><a href="loginForm.php" class="active" id="">Login</a></li>
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
			  <form id="register-form" action="registration.php" method="post" role="form" data-toggle="validator" class="">
				<div class="col-8 form-group controls">
					<label for="firstName">First Name:</label>
					<input type="text" class="form-control" id="firstName1" name="firstName" placeholder="Enter first name" required pattern="[A-Za-z]{3,20}" title="Please enter first name">
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-8 form-group controls">
					<label for="lastName">Last Name:</label>
					<input type="text" class="form-control" id="lastName" name="lastName" placeholder="Enter last name" required pattern="[A-Za-z]{1,20}" title="Please enter a valid last name">
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-8 form-group controls">
					<label for="email">Email Id:</label>
					<input type="email" class="form-control" id="email1" name="email" placeholder="Enter email id" required>
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-8 form-group controls">
					<label for="email">Mobile no:</label>
					<input type="text" class="form-control" id="mobile1" name="mobile" required pattern="[0-9]{10}" title="Please enter mobile number" placeholder="XXXXXXXXXX">
					<div class="help-block with-errors"></div>
				</div>
					<div class="col-8 form-group controls">
					<label for="address">Address:</label>
					<textarea class="form-control" rows="5" id="address1" name="address" placeholder="Enter the address" required pattern="[A-Za-z]{4,20}"></textarea>
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-8 form-group controls">
					<label for="lastName">Password:</label>
					<input type="password" class="form-control" id="userPassword" name="userPassword" required pattern="^(?=.*[0-9])(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z])[a-zA-Z0-9!@#$%^&*]{6,16}$" data-toggle="hover" data-trigger="hover" data-html="true" data-content="Password should contain : <br/> 1) Minimum 6 maximum 16 characters.<br/> 2) Atleast 1 alphabet in uppercase.<br/> 3) Atleast 1 alphabet in lowercase.<br/> 4) Atleast 1 special character.<br/> 5) Atleast 1 numeric value.<br/>" placeholder="Enter password">				  
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-8 form-group controls">
				    <label for="lastName">Confirm Password:</label>
				    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword" required pattern="^(?=.*[0-9])(?=.*[!@#$%^&*])(?=.*[a-z])(?=.*[A-Z])[a-zA-Z0-9!@#$%^&*]{6,16}$" data-toggle="hover" data-trigger="hover" data-html="true" data-content="Password should contain : <br/> 1) Minimum 6 maximum 16 characters.<br/> 2) Atleast 1 alphabet in uppercase.<br/> 3) Atleast 1 alphabet in lowercase.<br/> 4) Atleast 1 special character.<br/> 5) Atleast 1 numeric value.<br/>" placeholder="Enter password"><span id='message'></span> 
					<div class="help-block with-errors"></div>
				</div>
				<div class="col-8 form-group controls">
					<button type="submit" id="submit" class="btn btn-success"></i> Register</button>
				    <div id="msgSubmit" class="h3 text-center"></div> 
				    <?php 
					if(isset($_SESSION["message_register"])){
						echo $_SESSION["message_register"];
					}
					unset($_SESSION["message_register"]);
					 ?>
				    <div class="clearfix"></div>
				</div>
			  </form>
        <div id="home-page" class="row hidden">
				<hr>
				<address>
				<strong>Home page</strong><br>
        <div class="col-8">
              <div class="text-center">
                <?php if(isset($message_register)) { ?>
                <div class="message"><?php echo $_SESSION["message_register"] ?></div>
                <?php unset($_SESSION["message_register"]);
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
 <script>
$(document).ready(function(){
    $('[data-toggle="hover"]').popover();   
});
</script>
</body>
</html>