<?php
session_start();
if(isset($_GET["id"])){
	$_SESSION["customer_id"] = $_GET["id"];
}else{
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

 <hr/><hr/>
 <div class="container">
  <div class="row">
	<div class="col-md-6 col-md-offset-3">
	  <hr/>
		<div class="row">
			<div class="col-lg-12">			  
			  <form id="forgetpassword-form" action="updatePassword.php" method="post" role="form" data-toggle="validator" class="">
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
					<button type="submit" id="submit" class="btn btn-success"></i> Submit</button>
				    <div id="msgSubmit" class="h3 text-center"></div> 
				    <?php 
					if(isset($_SESSION["message"]))
					{
						echo $_SESSION["message"];
					}
					unset($_SESSION["message"]);
					?>
				    <div class="clearfix"></div>
				</div>
			  </form>
        
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