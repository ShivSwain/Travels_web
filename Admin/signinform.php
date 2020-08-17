<?php
	require_once "include/header.php";

	$name= $_POST["fname"];
	$email= $_POST["email"];
	$password= $_POST["pwd"];
	$confirm_pwd= $_POST["confirm-pwd"];
	$address= $_POST["address"];
	$birthday= $_POST["birthday"];
	$city= $_POST["city"];
	$state= $_POST["state"];
	$pincode= $_POST["pin-code"];
	$contact_no= $_POST["contact_no"];

	$sql="insert into users(name,email,password,confirm_password,address,birthday,city,state,pincode,contact_no) values('".$name."','".$email."','".$password."','".$confirm_pwd."','".$address."','".$birthday."','".$city."','".$state."','".$pincode."','".$contact_no."')";
	
	mysqli_query($con,$sql);

	 echo "<script> 
	 			alert('Sign In Successfully');
 				window.location.href='login.php';
		  </script>"; 	
?>