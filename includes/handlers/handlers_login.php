<?php

	if(isset($_POST['submit']))
	{
		$uemail=$_POST['email'];
		$upassword=$_POST['password'];

		$loginQuery = "SELECT *  FROM user_login WHERE uemail=
					   '$uemail' AND upassword='$upassword'";

		$success = mysqli_query($con,$loginQuery);
		if(mysqli_num_rows($success)!=1)
			$errorArray['invalidLogin']="Login Not authorised 😴😴😴😴";
		else
			$row = mysqli_fetch_array($success);
			echo "HI ".$row[1];
	}

?>		