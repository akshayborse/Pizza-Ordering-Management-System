<?php
	require('config.php');
	
	if(!empty($_POST))
	{	
			$fnm=$_POST['name'];
			$unm=$_POST['Username'];
			$pwd=$_POST['Password'];
			$gender=$_POST['gender'];
			$email=$_POST['Email'];
			$contact=$_POST['contact'];
			$city=$_POST['address'];
			
			
		
			$conn=mysqli_connect("localhost","root","","pizza")or die("Can't Connect...");

			$query="insert into user(u_fnm,u_unm,u_pwd,u_gender,u_email,u_contact,u_city)
			values('$fnm','$unm','$pwd','$gender','$email','$contact','$address')";
			
			mysqli_query($conn,$query) or die("Can't Execute Query...");
			header("location:index.php");
		
	}
	else
	{
		header("location:index.php");
	}
?>