<?php
	require_once "include/header.php"
?><!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	  <!---- Bootstrap Files --------------->
	  <meta name="viewport"content="width=device-width, initial-scale:1.0"/>  
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
   	  <link rel="stylesheet" type="text/css" href="https://www.w3schools.com/w3css/4/w3.css"/>
  	  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>	
	  <link href="css/fontawesome/css/all.css" type="text/css" rel="stylesheet"/>
  	  <!-------- Manual css ----->
	  <link rel="stylesheet" type="text/css" href="css/addpkgitinerary.css"/>
</head>
<body>
	<div style="height: 100%; border: 1px solid red;">
<div class="container-fluid">
	<div class="container">
		<!--Add Package Itinerary-->
		<div class="row"> 
			<div class="col-xs-2 col-sm-4 col-md-3 col-lg-3"> </div>
			<div class="col-xs-8 col-sm-6 col-md-6 col-lg-6">
				<center> <label class="signin"> ADD PACKAGE ITINERARY </label> </center>
				<br/>
			</div>
			<div class="col-xs-2 col-sm-4 col-md-3 col-lg-3"> </div>
		</div>
		<form class="addpkgitin" action="addpkgitin.php" id="form1" method="POST">
			<div class="row">
				<div class="col-md-2"> </div>
				<div class="col-md-4">
					<label class="pkgnmitin"> Package Name</label>
				</div>
				<div class="col-md-6">
					<select class="pkglist" name="pkg_list">
						<option value="0"> Select Your Package Name </option>
						<option value="301"> Beauty of Taj Mahal Gateway </option>
						<option value="304"> Goa Paradise Beach </option>
						<option value="307"> Backwater of Kerala </option>
						<option value="310"> Mesmeirizing Golden Temple </option>
						<option value="313"> Short Tour of Rajasthan</option>
						<option value="316"> Mumbai Tour </option>
						<option value="319"> Chennai Tour </option>
						<option value="322"> Kolkata Tour </option>
						<option value="325"> Varanasi Tour </option>
					</select>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-4">
					<label class="pkgday"> Day </label>
				</div>
				<div class="col-md-6">
					<input type="text" name="days" id="days" placeholder="Enter No.of Days" class="form-control">
				</div>
			</div>
			<div class="row">
				<div class="col-md-2"></div>
				<div class="col-md-4">
					<label class="content"> Content </label>
				</div>
				<div class="col-md-6">
					<textarea class="contentbox" name="content"></textarea>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4"></div>
				<div class="col-md-2"></div>
				<div class="col-md-6">
					<input type="submit" name="ADD" class="add">
				</div>
			</div>
		</form>
	</div>
</div>
</div>
</body>
</html>

