<?php
session_start();
if(!empty($_SESSION["email"])){
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "customer_registration";
$email = $_SESSION["email"];

$conn = mysqli_connect($servername, $username, $password, $dbname);
	$sql = "SELECT * FROM customer_list WHERE email ='" . $email ."'";
	$result = mysqli_fetch_assoc(mysqli_query($conn, $sql));

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
			<li><a href="changePasswordForm.php">Change Password</a></li>
			<li><a href="#">Edit Profile</a></li>
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
				<form id="edit-profile-form" action="editProfile.php" method="post" role="form" data-toggle="validator" class="">
					<div class="col-8 form-group controls">
						<label for="lastName">Update First Name:</label>
					<input type="text" class="form-control" id="firstName" name="firstName" value="<?php echo $result['first_name'];?>" pattern="[A-Za-z]{3,20}" title="Please enter first name">
					<div class="help-block with-errors"></div>
					</div>
					<div class="col-8 form-group controls">
						<label for="lastName">Update Last Name:</label>
					<input type="text" class="form-control" id="lastName" name="lastName" value="<?php echo $result['last_name'];?>" pattern="[A-Za-z]{1,20}" title="Please enter a valid last name">
					<div class="help-block with-errors"></div>
					</div>
					<div class="col-8 form-group controls">
						<label for="lastName">Update Mobile Number:</label>
						<input type="text" class="form-control" id="mobile" name="mobile" pattern="[0-9]{10}" title="Please enter mobile number" value="<?php echo $result['mobile'];?>">
						<div class="help-block with-errors"></div>
					</div>
					<div class="col-8 form-group controls">
						<label for="lastName">Update Address:</label>
						<textarea class="form-control" rows="5" id="address" name="address" pattern="[A-Za-z]{4,20}"><?php echo $result['address'];?></textarea>
						<div class="help-block with-errors"></div>  
					</div>
					<div class="col-8 form-group controls">
						<button type="submit" id="submit" class="btn btn-success"></i>Save</button>						  
						<div id="msgSubmit" class="h3 text-center hidden"></div> 
						<div><?php
						if(isset($_SESSION["updateProfileMessage"]))
						{
							echo $_SESSION["updateProfileMessage"];
						}
						unset($_SESSION["updateProfileMessage"]);
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
