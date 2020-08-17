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
					<center> <label class="add-hotel-form">UPDATE HOTEL FORM </label> </center>
				</div>
			</div>
			<form class="hotel-form" id="formsubmit" action="addhoteldetail.php" method="POST">
			<div class="row">
				<div class="col-md-6">
					<span><i class="fas fa-hotel" style="color: black;"></i></span>
					<label class="hotel-nm"> Hotel Name </label>
					<select class="categories" name="hotelnm">
						<option value="0">Select Hotel Name</option>
						<option value="201">Raj Mahal Hotel</option>
						<option value="202">Mansingh Palace Hotel</option>
						<option value="203">Marquis Beach Resort</option>
						<option value="204">Lemon Tree Amarante Resort</option>
						<option value="205">Casino Hotel</option>
						<option value="206">Fort Heritage</option>
						<option value="207">Golden Tulip Hotel</option>
						<option value="208">Radisson BLU Hotel</option>
						<option value="209">The Imperial Hotel</option>
						<option value="210">Golden Tulip Hotel</option>
						<option value="211">Sun & Sand Hotel</option>
						<option value="212">Heritage Inn Hotel</option>
						<option value="213">The Pride Hotel</option>
						<option value="214">Park Plaza OMR Hotel</option>
						<option value="215">The Mark Hotel</option>
						<option value="216">Hotel Hindusthan International</option>
						<option value="217">Meraden Grand Hotel</option>
						<option value="218">Radisson Hotel</option>	
					</select>
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
					<input type="submit" name="addhotel" id="addhotelbtn"value="UPDATE">
				</div>
			</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>
	