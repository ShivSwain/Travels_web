<?php
	require_once "include/header.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/adminpanel.css">
</head>
<body>
	<div class="container-fluid">
		<div class="container">
			<!--Start 1st Row-->
			<div class="row">
				<div class="col-lg-12">
					<center> <label class="admin_nm"> Welcome to Admin Panel</label> </center>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<center> <label class="forms"> Forms </label> </center>
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
					<label class="form-link"><a href="addpkgdetail.php"> <center> Add Package </center> </a> </label>
				</div>
				<div class="col-md-3">
					<label class="form-link"> <a href="addhotel.php"> <center>  Add Hotel </center> </a> </label>
				</div>
				<div class="col-md-3">
					<label class="form-link"> <a href="listpackage.php"><center>  View Package </center> </a> </label>
				</div>
				<div class="col-md-3">
					<label class="form-link"> <a href="listhotel.php"> <center> View Hotel </center> </a> </label>
				</div>
			</div>
			<!--End 1st Row-->
			<div class="row">
				<div class="col-md-3">
					<label class="form-link"> <a href="packageupdate.php"> <center> Update Package </center></a></label>
				</div>
				<div class="col-md-3">
					<label class="form-link"> <a href="hotelupdate.php"> <center> Update Hotel</center></a></label>
				</div>
				<div class="col-md-3">
					<label class="form-link"> <a href="deletepackage.php"> <center> Delete Package </center></a></label>
				</div>
				<div class="col-md-3">
					<label class="form-link"> <a href="deletehotel.php"> <center> Delete Hotel </center></a></label>
				</div>
			</div>
			<!--End 2st Row-->
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-4">
					<label class="form-link"> <a href="viewcustomer.php"> <center> View Customers</center></a></label>
				</div>
				<div class="col-md-4"></div>
			</div>
		</div>
	</div>
<?php
	require_once "include/footer.php";
?>