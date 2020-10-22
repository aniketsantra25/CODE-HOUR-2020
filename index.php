  <?php

		

		include('config.php');
		include('includes/handlers/login-handlers.php');
		include('includes/handlers/app_logic.php');
		if(isset($_SESSION['userLoggedIn']))
			header('Location: includes/home.php');
		$errorArray = array();
		$errorArray['invalidLogin']="";
?>



<!DOCTYPE html>
<html>
<head>
	<link href='https://fonts.googleapis.com/css?family=Aclonica' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="assets/CSS/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="assets/CSS/styles.css">
	
	<title>CODEHOUR 2020</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
img:hover {
  animation: shake 0.5s;
  animation-iteration-count: infinite;
}

@keyframes shake {
  0% { transform: translate(1px, 1px) rotate(0deg); }
  10% { transform: translate(-1px, -2px) rotate(-1deg); }
  20% { transform: translate(-3px, 0px) rotate(1deg); }
  30% { transform: translate(3px, 2px) rotate(0deg); }
  40% { transform: translate(1px, -1px) rotate(1deg); }
  50% { transform: translate(-1px, 2px) rotate(-1deg); }
  60% { transform: translate(-3px, 1px) rotate(0deg); }
  70% { transform: translate(3px, 1px) rotate(-1deg); }
  80% { transform: translate(-1px, -1px) rotate(1deg); }
  90% { transform: translate(1px, 2px) rotate(0deg); }
  100% { transform: translate(1px, -2px) rotate(-1deg); }
}
</style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
	 <a class="navbar-brand" href="index.php"><img src="assets/images/SharedScreenshot.jpg" width="220" height="70" ></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <!--Menu Bar-->
 	<div class="collapse navbar-collapse menubar" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="assets/aboutus.html" target="_blank">About Us</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="contactUS.php" target="_blank">Contact Us</a>
      </li>
    </ul>
  	</div>
</nav>
<!--Main body-->
			<marquee behavior="alternate" direction="up" width="80%">
	<marquee direction="right" behavior="alternate" style="font-size: 70px; font-family: 'Aclonica'; "><<<<---CODE HUB--->>>></marquee>
</marquee>
			
	<!--Login Zone-->
	<div style="padding-top: 20px; padding-right: 20px" class="col-md-3 loginzone">
		<h2>Login Zone</h2>
		<form method="post">
			<label>Email</label><br>
			<input type="text" name="email"><br>
			<label>Password</label><br>
			<input  type="password" name="password"><br><br>
			<button type="submit" name="submit">Login</button>
			<p><a href="enter_email.php" style="color: white">Forgot your password?</a></p>
		</form><br>
		<p>
			<?php
				echo $errorArray['invalidLogin'];
			?>
		</p>
		<q>New user? Sign Up<a href="includes/register.php" style = "color: red"><i>Here</i></a></q>
		


	
	</div>	
</div>
<div style="padding-top:70px; padding-left: 50px ">
	<div id="row">
		<div class="col-md-9 logo">
	<img src="assets/images/13eh661fidp01.png" height="450px" width="1000px">
		</div>
	</div>
</div>	

<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>	

</body>
</html>