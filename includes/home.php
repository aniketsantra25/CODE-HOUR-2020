  <?php

 		include('../config.php');
 		if(!isset($_SESSION['userLoggedIn']))
 			header('Location: ../index.php');
$currentuserId = $_SESSION['currentuserId'];

$userDetailsQuery = "SELECT * FROM userdetails WHERE uid='$currentuserId'";


$success = mysqli_query($con,$userDetailsQuery);
$userDetailsRow = mysqli_fetch_array($success);





?>


<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" type="text/css" href="assets/CSS/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="../assets/CSS/styles.css">
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
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
	 <a class="navbar-brand" href="../index.php"><img src="../assets/images/SharedScreenshot.jpg" width="220" height="70" ></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <!--Menu Bar-->
 	<div class="collapse navbar-collapse menubar" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../assets/aboutus.html" target="_blank">About Us</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="../contactUS.php" target="_blank">Contact Us</a>
      </li>
      <li class="nav-item active" style="margin-left: 800px;">
        <a class="nav-link" href="logout.php?logout">Logout</a></li>
    </ul>
  	</div>
</nav>

		<div class="container">
    
		<?php

			echo "<h1>HI ".$userDetailsRow[1]."!</h2>";

		?>
  


		<br><br>
		<h3 style="text-align: center">RULES OF THE CONTEST</h3><hr>
		<ol style="font-size: 30px;">
			<li>You are supposed to code in C/C++/JAVA/PYTHON only.</li>
			<li>Total time for the contest is 60minutes and 15minutes extra for reading time.</li>
			<li>Then contest will be start at 12:15pm sharply.</li>
			<li>The below button will be activated exactly when the contest starts.</li>
		</ol>
		<form action="../includes/contest.php" method="post">
		<button style="width=400px; background-color: transparent; color:white; ">Start Contest</button>	
		</form>
	</div>


</body>
</html>