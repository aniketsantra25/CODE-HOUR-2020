<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/CSS/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/CSS/styles.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<title>Password_reset</title>

</head>
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

	<form class="login-form" action="new_password.php" method="post">
		<h2 class="form-title">New password</h2>
		<!-- form validation messages -->
		<?php include('messages.php'); ?>
		<div class="form-group">
			<label>New password</label>
			<input type="password" name="new_pass">
		</div>
		<div class="form-group">
			<label>Confirm new password</label>
			<input type="password" name="new_pass_c">
		</div>
		<div class="form-group">
			<button type="submit" name="new_password" class="login-btn">Submit</button>
		</div>
	</form>

</body>
</html>