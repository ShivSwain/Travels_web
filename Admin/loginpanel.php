<?php
	require_once "../include/config.php";

		$admin_id= $_POST["emailtxt"];
		$admin_password= $_POST["pwdtxt"];	

		$sql= "select * from admin where email_id='".$admin_id."'OR username='".$admin_id."' AND password='".$admin_password."' ";
		$sql1= "select * from users where email='".$admin_id."'OR name='".$admin_id."' AND password='".$admin_password."' ";
		$result= mysqli_query($con,$sql);
		$result1= mysqli_query($con,$sql1);
		$row=mysqli_fetch_array($result);
		$row1=mysqli_fetch_array($result1);
		if(($admin_id==$row["email_id"]) || ($admin_id==$row["username"]) && ($admin_password==$row["password"]))
		{
			session_start();
			$_SESSION["user_id"]=$row["username"];
			header("location:adminpanel.php");
		}
		if(($admin_id==$row1["email"]) || ($admin_id==$row1["name"]) && ($admin_password==$row1["password"]))
		{
			$_SESSION["user_id"]=$row1["name"];
			header("location:../index.php");
		}
		else
		{
			echo "<script>
					alert('Please Enter Valid Id And Password !!');
			 		window.location.href='login.php';
  				 </script>";	
		}
?>	