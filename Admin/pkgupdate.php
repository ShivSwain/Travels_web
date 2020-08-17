<?php
	require_once "include/config.php";

	$pkgnm=$_POST["pkgnm"];
	$amt= $_POST["amount"];
	$source= $_POST["source"];
	$dest =$_POST["destination"];
	$pkgtype= $_POST["pkg-type"];
	$hoteltype= $_POST["hotel-type"];
	$traveltype= $_POST["travel-type"];
	

	
	$sql="update package_details set source='".$source."',destination='".$dest."',package_type='".$pkgtype."',hotel_type='".$hoteltype."',traveltype='".$traveltype."',amount='".$amt."' where package_id='".$pkgnm."'" ;

	mysqli_query($con,$sql);
	/*echo "<script> alert ('Package Updated Successfully')
		window.location.href='adminpanel.php';
	 </script>";*/
?>
