<?php
	if(isset($_POST['submit']))
	{
		$uemail = $_POST['email'];
		$upass = $_POST['password'];

		$loginQuery = "SELECT * FROM userlogin WHERE UEmail = '$uemail' AND UPassword = '$upass'";

		$success = mysqli_query($con ,$loginQuery);
		if(mysqli_num_rows($success)!=1)
			$errorArray['invalidLogin'] = "Login not authorised";
		else{
			$row = mysqli_fetch_array($success);
			$_SESSION['currentuserId'] = $row[0];
			$_SESSION['userLoggedIn'] = True;
			header('Location:includes/home.php');

			}
	}
?>