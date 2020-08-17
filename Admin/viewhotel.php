<?php
	require_once "include/header.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container-fluid">
		<div class="container">
			<div class="row borders">
				<div class="col-md-2" style="font-style:bolder;">S.No</div>
				<div class="col-md-3">Name</div>
				<div class="col-md-5">Address</div>
			</div>
			<?php
				$hotelsql= "select * from hotels where hotel_id='".$_GET["hid"]."'";
				$hotel_row=mysqli_query($con,$hotelsql);
				$res_hotel=mysqli_fetch_array($hotel_row);
			?>
			<div class="row ">
				<div class="col-md-2 borders">
					<?php
						echo $res_hotel["hotel_id"];
					?>	
				</div>
				<div class="col-md-3 borders">
					<?php
						echo $res_hotel["h_name"];
					?>
				</div>
				<div class="col-md-7 borders">
					<?php
						echo $res_hotel["address"];
					?>
				</div>
			</div>
			<div class="row borders">
				<div class="col-md-12 borders">Description</div>
				<div class="col-md-12 borders">
					<?php
						echo $res_hotel["description"];
					?>
				</div>
			</div>
		</div>
	</div>
	<?php
		require_once "include/footer.php";
	?>