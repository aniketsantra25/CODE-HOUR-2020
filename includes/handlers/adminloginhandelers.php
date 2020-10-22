<?php
	if(isset($_POST['submit']))
	{
		$ademail = $_POST['email'];
		$adpass = $_POST['password'];

		$loginQuery = "SELECT * FROM adminlogin WHERE ademail = '$ademail' AND adpass = '$adpass'";

		$success = mysqli_query($con ,$loginQuery);
		if(mysqli_num_rows($success)!=1)
			$errorArray['invalidLogin'] = "Login not authorised";
		else{
			$row = mysqli_fetch_array($success);
			$_SESSION['currentadId'] = $row[0];
			$_SESSION['adLoggedIn'] = True;
			header('Location:includes/adminpage.php');

			}
	}
?>