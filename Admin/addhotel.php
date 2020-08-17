<?php
	require_once "include/header.php";	
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="css/addhotel.css">
</head>
<body>
	<div class="bg-img">
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<center> <label class="add-hotel-form">ADD HOTEL FORM </label> </center>
				</div>
			</div>
			<form class="hotel-form" id="formsubmit" action="addhoteldetail.php" method="POST">
			<div class="row">
				<div class="col-md-6">
					<span><i class="fas fa-hotel" style="color: black;"></i></span>
					<label class="hotel-nm"> Hotel Name </label>
					<input type="text" name="hotelname" class="form-control" required>
				</div>
					<div class="col-md-6">
					<p>
					<span><i class="fas fa-hotel" style="color: black;"></i></i></span>
					<label class="category"> Category </label> <br/>	
					<select class="categories" name="category">
						<option value="0">Select No.of Beds</option>
						<option value="1">Single Bed</option>
						<option value="2">Double beds</option>
					</select>
					</p>
				</div>
			</div>
			<div class="row">				
				<div class="col-md-6">
					<span><i class="fas fa-rupee-sign" style="color: black;"></i></span>
					<label class="hotelamt"> Amount </label>
					<input type="text" name="hamt" class="form-control" required>
				</div>		
				<div class="col-md-6">
					<span><i class="fas fa-hotel" style="color: black;"></i></span>
					<label class="desc"> Hotel Description</label> <br/>
					<textarea class="hdesc" name="hoteldesc"> </textarea>
				</div>		
			</div>

			<div class="row">
					<div class="col-md-6">
					<span><i class="fas fa-city" style="color: black;"></i></span>
					<label class="add"> Hotel Address</label> <br/>
					<textarea class="hadd" name="haddress"></textarea>
				</div>
			</div>

			<div class="row">
				<div class="col-md-10"></div>
				<div class="col-md-2">
					<br/>
					<input type="submit" name="addhotel" id="addhotelbtn"value="ADD">
				</div>
			</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>
	