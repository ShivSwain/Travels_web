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
				<div class="col-lg-1">Id</div>
				<div class="col-lg-3">Name</div>
				<div class="col-lg-1">Source</div>
				<div class="col-lg-1">Destination</div>
				<div class="col-lg-1">Hotel_Type</div>
				<div class="col-lg-2">Travel_Type</div>
				<div class="col-lg-2">Package_Type</div>
				<div class="col-lg-1">Amount</div>

			</div>
			<?php
				$packagesql= "select * from package_details pd join package p on pd.package_id=p.id where package_id='".$_GET["pid"]."'";
				$package_row=mysqli_query($con,$packagesql);
				$i=0;
				while($i<=($res_package=mysqli_fetch_array($package_row)))
				{

			?>
			<div class="row">
				<div class="col-md-1 borders">
					<?php
						echo $res_package["Id"];
					?>	
				</div>
				<div class="col-md-3 borders">
					<?php
						echo $res_package["name"];
					?>
				</div>
				<div class="col-md-1 borders">
					<?php
						echo $res_package["source"];
					?>
				</div>
				<div class="col-md-1 borders">
					<?php
						echo $res_package["destination"];
					?>
				</div>
		 		<div class="col-md-1 borders">
					<?php
						echo $res_package["hotel_type"];
					?>
				</div>
				<div class="col-md-2 borders">
					<?php
						echo $res_package["travel_type"];	
					?>
				</div>
				<div class="col-md-2 borders">
					<?php
						echo $res_package["package_type"];	
					?>
				</div>
				<div class="col-md-1 borders">
					<?php
						echo $res_package["amount"];	
					?>
				</div>
			</div>
			<?php

				$i++;

			}
			?>
		</div>
	</div>
	<?php
		require_once "include/footer.php";
	?>