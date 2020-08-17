  <?php
	
	require_once "include/config.php";

	$name=$_POST["customer"];
	$email=$_POST["txtemail"];
	$number=$_POST["number"];
	$city=$_POST["city"];
	$con_number=$_POST["con_number"];
	$dates=$_POST["txtdate"];
	$room=$_POST["room"];
	$p_id=$_POST["pckglist"];
	$pkgtype=$_POST["pkgtype"];
	$h_list=$_POST["hotellist"];
	$hotels=$_POST["h_type"];
	$beds=$_POST["beds"];

	$checksql="select amount from package_details where package_id='".$p_id."' and hotel_type='".$hotels."' and package_type='".$pkgtype."'";
	$checkbed="select amounts from rooms where package_id='".$p_id."' and beds='".$beds."'";
	$ch_query=mysqli_query($con,$checksql);
	$ch_query1=mysqli_query($con,$checkbed);
	$ch_result=mysqli_fetch_array($ch_query);
	$ch_result1=mysqli_fetch_array($ch_query1);

	$total= $ch_result["amount"]*$room+$ch_result1["amounts"];
	
	// inserting the records
	$sql="insert into tour_details(name,email,city,number,alter_number,booking_from,package_id,hotel_id,package_type,hotel_rate,rooms,beds,amount) values('".$name."','".$email."','".$city."','".$number."','".$con_number."','".$dates."','".$p_id."','".$h_list."','".$pkgtype."','".$hotels."','".$room."','".$beds."','".$total."')";
	/*$sql1="select max(booking_id) from tour_details";
		$query1=mysqli_query($con,$sql1);
	$res=mysqli_fetch_array($query1);
	*/
	mysqli_query($con,$sql);
	

	header("location:paypage.php?amt=$total");
?>
