<?php
	
	ob_start();
	session_start();
	//this code is connected with database
	$timezone = date_default_timezone_set("Asia/Kolkata");
	$con = mysqli_connect("localhost","root","","codechef");

	if (mysqli_connect_errno()) 
	{
		echo "Failed to connect".mysqli_connect_error();
	}

?>	