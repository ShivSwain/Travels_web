<?php
	require_once "include/header.php";

	$pkgname= $_POST["pkg_list"];
	$day= $_POST["days"];
	$content= $_POST["content"];

	$sql="insert into package_details_itinerary(package_id,day,content)values('".$pkgname."','".$day."','".$content."')";	
	mysqli_query($con,$sql);

	echo "<script> alert ('Added Package Detail Successfully')</script>";
?>	