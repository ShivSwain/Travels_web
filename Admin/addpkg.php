<?php
	require_once "include/config.php";

	$pkgnm=$_POST["pkgname"];
	$amt= $_POST["amount"];
	$source= $_POST["source"];
	$dest =$_POST["destination"];
	$pkgtype= $_POST["pkg-type"];
	$hoteltype= $_POST["hotel-type"];
	$traveltype= $_POST["travel-type"];
	

	$sql="insert into package_details(source,destination,package_type,hotel_type,travel_type,amount) values('".$source."','".$dest."','".$pkgtype."','".$hoteltype."','".$traveltype."','".$amt."')";
	$sql1="insert into package(name,source,destination)values('".$pkgnm."','".$source."','".$dest."')";

	mysqli_query($con,$sql);
	mysqli_query($con,$sql1);
	echo "<script> alert ('Package added Successfully')
		window.location.href='adminpanel.php';
	 </script>";
?>
