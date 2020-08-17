<?php 
	require_once "include/header.php";

	$sql="select * from tour_details td join package p on td.package_id=p.id join hotels h on h.hotel_id=td.hotel_id where booking_id=2	";
	$sql_query=mysqli_query($con,$sql);
	$resultp=mysqli_fetch_array($sql_query);
?>

	<div class="row">
		<div class="container">
				<h2>Payment Page</h2>
				<p class="	" style="border:1px solid rgb(255,193,7);width:420px;"></p>
				<div class="row borders" >
					<div class="col-lg-3">
						<span>Name</span>
					</div>
					<div class="col-lg-1">:-</div>
					<div class="col-lg-3"> 
						<span>
							<?php echo $resultp["Name"]; ?>
						</span>
					</div>
				</div>
				<div class="row borders" >
					<div class="col-lg-3">
						<span>Email ID</span>
					</div>
					<div class="col-lg-1">:-</div>
					<div class="col-lg-3"> 
						<span>
							<?php echo $resultp["email"]; ?>
						</span>
					</div>
				</div>
				
				<div class="row borders" >
					<div class="col-lg-3">
						<span>City</span>
					</div>
					<div class="col-lg-1">:-</div>
					<div class="col-lg-3"> 
						<span>
							<?php echo $resultp["city"]; ?>
						</span>
					</div>
				</div>
				<div class="row borders" >
					<div class="col-lg-3">
						<span>Date</span>
					</div>
					<div class="col-lg-1">:-</div>
					<div class="col-lg-3"> 
						<span>
							<?php echo $resultp["booking_from"]; ?>
						</span>
					</div>
				</div>
				<div class="row borders" >
					<div class="col-lg-3">
						<span>Package Selected</span>
					</div>
					<div class="col-lg-1">:-</div>
					<div class="col-lg-3"> 
						<span>
							<?php echo $resultp["name"]; ?>
						</span>
					</div>
				</div>
				<div class="row borders" >
					<div class="col-lg-3">
						<span>Package Type</span>
					</div>
					<div class="col-lg-1">:-</div>
					<div class="col-lg-3"> 
						<span>
							<?php echo $resultp["package_type"]; ?>
						</span>
					</div>
				</div>
				<div class="row borders" >
					<div class="col-lg-3">
						<span>Hotel Selected</span>
					</div>
					<div class="col-lg-1">:-</div>
					<div class="col-lg-3"> 
						<span>
							<?php echo $resultp["h_name"]; ?>
						</span>
					</div>
				</div>
				<div class="row borders" >
					<div class="col-lg-3">
						<span>Number Of Rooms are </span>
					</div>
					<div class="col-lg-1">:-</div>
					<div class="col-lg-3"> 
						<span>
							<?php echo $resultp["rooms"]; ?>
						</span>
					</div>
				</div>
				<div class="row borders" >
					<div class="col-lg-3">
						<span>Hotel Ratings are</span>
					</div>
					<div class="col-lg-1">:-</div>
					<div class="col-lg-3"> 
						<span>
							<?php echo $resultp["hotel_rate"]; ?>-Stars
						</span>
					</div>
				</div>
				
				<div class="row borders" >
					<div class="col-lg-3">
						<span>Number of Beds</span>
					</div>
					<div class="col-lg-1">:-</div>
					<div class="col-lg-3"> 
						<span>
							<?php echo $resultp["beds"]; ?>
						</span>
					</div>
				</div>
				<div class="row borders" >
					<div class="col-lg-3">
						<span>Number</span>
					</div>
					<div class="col-lg-1">:-</div>
					<div class="col-lg-3"> 
						<span>
							<?php echo $resultp["number"]; ?>
						</span>
					</div>
				</div>
				<div class="row borders" >
					<div class="col-lg-3">
						<span>Alternative Number</span>
					</div>
					<div class="col-lg-1">:-</div>
					<div class="col-lg-3"> 
						<span>
							<?php echo $resultp["Alter_number"]; ?>
						</span>
					</div>
				</div>


				<div class="row borders" >
					<div class="col-lg-3">
						<span>Total Amount</span>
					</div>
					<div class="col-lg-1">:-</div>
					<div class="col-lg-3"> 
						<span>
							<?php echo $resultp["amount"]; ?>
						</span>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-10">
						
					</div>
					<div class="col-lg-2">
						<button class="" onclick="pay();" style="border-radius:10px; height:50px; width: 100px;">
							Pay Now
						</button>
					</div>
				</div>
		</div>
	</div>

	<script type="text/javascript">
		function pay()
		{
			alert("Payment Completed.")
			window.location.href="index.php";
		}
	</script>
<?php
	require_once "include/footer.php";
?>