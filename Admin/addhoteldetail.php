<?php
	require_once "include/config.php";

	$hotelname= $_POST["hotelname"];
	$category= $_POST["category"];
	$hamount= $_POST["hamt"];
	$hoteldesc= $_POST["hoteldesc"];
	$hoteladd= $_POST["haddress"];

	$sql="insert into hotels(h_name,description,address)values('".$hotelname."','".$hoteldesc."','".$hoteladd."')";	
	$sql1="insert into rooms(beds,amounts)values('".$category."','".$hamount."')";
	mysqli_query($con,$sql);
	mysqli_query($con,$sql1);

	echo "<script> alert ('Added Hotels Detail Successfully')
		window.location.href='adminpanel.php';
	</script>";
?>	