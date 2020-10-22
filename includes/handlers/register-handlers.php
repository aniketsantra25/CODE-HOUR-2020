<?php
	if(isset($_POST['submit']))
	{
		$uname = $_POST['uname'];
		$ucollege = $_POST['ucollege'];
		$ucontact = $_POST['ucontact'];
		$uemail = $_POST['uemail'];
		$upassword = $_POST['upassword'];
		$uyear=$_POST['uyear'];
		$uother=$_POST['other'];
		
		if($ucollege == -999)
		{
			$registerQueryColleges="INSERT INTO colleges(cname) VALUES('$uother') ";
			$success = mysqli_query($con,$registerQueryColleges);
			$registerQueryColleges = "SELECT cid FROM colleges WHERE cname= '$uother'";
			$success= mysqli_query($con,$registerQueryColleges);
			$row=mysqli_fetch_array($success);
			$ucollege = $row[0];
		}

		$registerQueryLogin = "INSERT INTO userlogin(UEmail,UPassword) VALUES ('$uemail','$upassword')";

		$registerQueryDetails = "INSERT INTO userdetails(uname,ucollege,ucontact,uyear) VALUES ('$uname','$ucollege','$ucontact','$uyear')";
		

		$success = mysqli_query($con,$registerQueryLogin);

		$success1 = mysqli_query($con,$registerQueryDetails);

		if($success && $success1)
		
			echo "Registration successfull.. GO BACK TO LOGIN";
		
			
		/*$q = "SELECT UId FROM userlogin WHERE UEmail = '$uemail' AND UPassword = '$upassword'";
		$s = mysqli_query($con,$q);
		$r = mysqli_fetch_array($s);
		$id = $r[0];
		$pinfo = pathinfo($_FILES['uimage']['name']);
		$extn = $pinfo['extension'];
		$imgDest = "../assets/images/user-images/".$id.".".$extn;
		move_uploaded_file($_FILES['uimage']['tmp_name'], $imgDest);
		*/
		else
			echo "Error in registration";
	}
		

		

?>