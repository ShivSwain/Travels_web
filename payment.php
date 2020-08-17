<?php
	require_once "include/header.php";
?>
<!DOCTYPE html>
<html>
<head>
  	  <!-------- Manual css ----->
	  <link rel="stylesheet" type="text/css" href="css/bookingform.css"/>
	  <script type="text/javascript">
	  	function changeHotels()
	  	{
  		 	var svalue = document.getElementById("pckglist").value;
  		 	var hlist = document.getElementById("hotellist");

  		 	var option = document.createElement("OPTION");
  		 	var option1 = document.createElement("OPTION");
  		 	var defopt = document.createElement("OPTION");
  		 	
  		 	hlist.options.length=0;
  		 	defopt.innerHTML = "Select Your Hotels";
	       	defopt.value = "";
	       	hlist.options.add(defopt);
  		 	if(svalue==301)
  		 	{
	       		option.innerHTML = "Raj Mahal Hotel";
	       		option.value = "201";
	       		hlist.options.add(option);
	       		option1.innerHTML = "Mansingh Palace Hotel";
	       		option1.value = "202";
	       		hlist.options.add(option1);
	       	}
	       	else if(svalue==302)
  		 	{
	       		option.innerHTML = "Marquis Beach Resort";
	       		option.value = "203";
	       		hlist.options.add(option);
	       		option1.innerHTML = "Lemon Tree Amarante Resort";
	       		option1.value = "204";
	       		hlist.options.add(option1);
	       	}
	       	else if(svalue==303)
  		 	{
	       		option.innerHTML = "Casino Hotel";
	       		option.value = "205";
	       		hlist.options.add(option);
	       		option1.innerHTML = "FORT HERITAGE";
	       		option1.value = "206";
	       		hlist.options.add(option1);
	       	}
	       	else if(svalue==304)
  		 	{
	       		option.innerHTML = "GOLDEN TULIP  HOTEL";
	       		option.value = "207";
	       		hlist.options.add(option);
	       		option1.innerHTML = "RADISSON BLU  HOTEL";
	       		option1.value = "208";
	       		hlist.options.add(option1);
	       	}
	       	else if(svalue==305)
  		 	{
	       		option.innerHTML = "THE IMPERIAL HOTEL";
	       		option.value = "209";
	       		hlist.options.add(option);
	       		option1.innerHTML = "GOLDEN TULIP HOTEL";
	       		option1.value = "210";
	       		hlist.options.add(option1);
	       	}
	       	else if(svalue==306)
  		 	{
	       		option.innerHTML = "SUN AND SAND HOTEL";
	       		option.value = "211";
	       		hlist.options.add(option);
	       		option1.innerHTML = "HERITAGE INN  HOTEL";
	       		option1.value = "212";
	       		hlist.options.add(option1);
	       	}
	       	else if(svalue==307)
  		 	{
	       		option.innerHTML = "THE PRIDE HOTEL";
	       		option.value = "213";
	       		hlist.options.add(option);
	       		option1.innerHTML = "PARK PLAZA OMR HOTEL";
	       		option1.value = "214";
	       		hlist.options.add(option1);
	       	}
	       	else if(svalue==308)
  		 	{
	       		option.innerHTML = "THE MARK HOTEL";
	       		option.value = "215";
	       		hlist.options.add(option);
	       		option1.innerHTML = "HOTEL HINDUSTHAN INTERNATIONAL";
	       		option1.value = "216";
	       		hlist.options.add(option1);
	       	}
	       	else if(svalue==309)
  		 	{
	       		option.innerHTML = "MERADEN GRAND HOTEL";
	       		option.value = "217";
	       		hlist.options.add(option);
	       		option1.innerHTML = "RADISSON HOTEL";
	       		option1.value = "218";
	       		hlist.options.add(option1);
	       	}
	       	else
	       	{

	       	}
	  	}
	  	function changeType()
	  	{
	  		var pkgtype=document.getElementById("pkgtype").value;
	  		var hrate=document.getElementById("h_type");

	  		var hoption=document.createElement("OPTION");
	  		var hdefopt=document.createElement("OPTION");
	  		hrate.options.length=0;
	  		hdefopt.innerHTML="Select Your Hotel Ratings";
	  		hdefopt.value="";
	  		hrate.options.add(hdefopt);

	  		if(pkgtype=="Silver")
	  		{
	  			hoption.innerHTML="3-Stars";
	  			hoption.value="3";
	  			hrate.options.add(hoption);
	  		}	
	  		else if(pkgtype=="Gold")
	  		{
	  			hoption.innerHTML="4-Stars";
	  			hoption.value="4";
	  			hrate.options.add(hoption);
	  		}
	  		else if(pkgtype=="Platinum")
	  		{
	  			hoption.innerHTML="5-Stars";
	  			hoption.value="5";
	  			hrate.options.add(hoption);
	  		}
	  		else
	  		{

	  		}
	  	}
	  </script>
</head>
<body>
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
					<h2 class="booking"style="font-weight: bolder; font-family: arial;"> BOOKING </h2>
					<p class="	" style="border:1px solid rgb(255,193,7);width:620px;"></p>
				</div>
			</div>
			<!-- Start Booking Form-->
			<form class="bookingform" action=" con_payment.php " method="POST">

				<div class="row borders">
					<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
					<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11 ">
						<h2 class="booking"style="font-weight: bolder; font-family: arial;"> Customer Details</h2>
						<p class="	" style="border:1px solid rgb(255,193,7);width:420px;"></p>
					</div>
					<div class="col-md-2"></div>
					<div class="col-md-3 borders" style="padding: 6px 0px;">
						<span><i class="fas fa-user"></i></span>
						<label class=""> Customer Name</label>
					</div>
					<div class="col-md-5" style="margin:5px 0px;">
						<input type="text" name="customer" placeholder="Full Name" class="form-control" pattern="^[A-Za-z\s]{1,}[\.]{0,1}[A-Za-z\s]{0,}$" required />
					</div>
				</div>
				<div class="row borders">
					<div class="col-md-2 "></div>
					<div class="col-md-3 borders" style="padding: 6px 0px;">
						<span><i class="fas fa-envelope" ></i></span>
						<label class=""> Email ID</label>
					</div>
					<div class="col-md-5 " style="margin:5px 0px;">
						<input type="gmail" name="txtemail" placeholder="unknown@gmail.com" class="form-control" />
					</div>
				</div>
				<div class="row borders">
					<div class="col-md-2"></div>
					<div class="col-md-3 borders" style="padding: 7px 0px;">
						<span><i class="fas fa-city"></i></span>
						<label class=""> Origin City</label>
					</div>
					<div class="col-md-5" style="margin:5px 0px;">
						<input type="text" name="city" placeholder="city" class="form-control" required>
					</div>
				</div>
				<div class="row borders">
					<div class="col-md-2"></div>
					<div class="col-md-3 borders" style="padding: 6px 0px;">
						<span><i class="fas fa-phone"></i></span>
						<label class="">Mobile Number</label>
					</div>
					<div class="col-md-5" style="margin:5px 0px;">
						<input type="text" name="number" placeholder="(+91)1234-123-123" class="form-control" pattern="^[6-9]{1}[0-9]{9}$" required>
					</div>
				</div>
				<div class="row borders">
					<div class="col-md-2"></div>
					<div class="col-md-3 borders" style="padding: 6px 0px;">
						<span><i class="fas fa-phone"></i></span>
						<label class="">Alternative Mobile Number</label>
					</div>
					<div class="col-md-5" style="margin:5px 0px;">
						<input type="text" name="con_number" placeholder="(+91)1234-123-123" pattern="^[6-9]{1}[0-9]{9}$" class="form-control">
					</div>
				</div>
				<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1"></div>
				<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11 ">
					<h2 class="booking"style="font-weight: bolder; font-family: arial;"> Tour details</h2>
					<p class="	" style="border:1px solid rgb(255,193,7);width:420px;"></p>
				</div>
				<div class="row borders">
					<div class="col-md-2"></div>
					<div class="col-md-3" style="margin:6px 0px;">
						<span><i class="fas fa-calendar-alt"></i></span>
						<label class="fromdate"> Date Of Arrival</label>
					</div>
					<div class="col-md-5" style="margin:5px 0px;" >
						<input type="date" name="txtdate" class="form-control" id="fromdate" min="<?php echo date("Y-m-d"); ?>" required>
					</div>
				</div>
				<div class="row borders">
					<div class="col-md-2"></div>
					<div class="col-md-3 borders"style="padding: 6px 0px;">
						<span><i class="fas fa-briefcase"> </i>	</span>
						<label class="pkgname" style="font-size: 18px;"> Package Name</label>
					</div>
					<div class="col-md-5" style="margin:5px 0px;" >
						<select class="pkglist" name="pckglist"  id="pckglist" onchange="changeHotels();" required>
							<option value=""> Select Your Package Name </option>
							<option value="301"> Beauty of Taj Mahal Gateway </option>
							<option value="302"> Goa Paradise Beach </option>
							<option value="303"> Backwater of Kerala </option>
							<option value="304"> Mesmeirizing Golden Temple </option>
							<option value="305"> Short Tour of Rajasthan</option>
							<option value="306"> Mumbai Tour </option>
							<option value="307"> Chennai Tour </option>
							<option value="308"> Kolkata Tour </option>
							<option value="309"> Varanasi Tour </option>
						</select>
					</div>
				</div>
				<div class="row borders">
					<div class="col-md-2"></div>
					<div class="col-md-3 borders"style="padding: 6px 0px;">
						<span><i class="fas fa-briefcase"> </i>	</span>
						<label class="pkgname" style="font-size: 18px;">Type of Package </label>
					</div>
					<div class="col-md-5" style="margin:5px 0px;" >
						<select class="pkglist" name="pkgtype" onchange="changeType();" id="pkgtype" required>
						<option value=""> Select Your Package Type </option>
						<option value="Silver"> Silver </option>
						<option value="Gold"> Gold </option>
						<option value="Platinum"> Platinum </option>
					</select>
					</div>
				</div>
				<div class="col-lg-1"></div>
				<div class="col-xs-11 col-sm-11 col-md-11 col-lg-11 ">
					<h2 class="booking"style="font-weight: bolder; font-family: arial;"> Hotel details</h2>
					<p class="	" style="border:1px solid rgb(255,193,7);width:420px;"></p>
				</div>
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-3" style="padding: 6px 0px;">
						<span><i class="fas fa-calendar-alt"></i></span>
						<label class="" >Select Hotel</label>
					</div>
					<div class="col-md-5" style="margin:6px 0px;">
						<select name="hotellist" id="hotellist" required>
							<option value="">Select Your Hotel </option>
							<option value="201">Raj Mahal Hotel</option>
							<option value="202">Mansingh Palace Hotel</option>
							<option value="203">Marquis Beach Resort</option>
							<option value="204">Lemon Tree Amarante Resort</option>
							<option value="205">Casino Hotel</option>
							<option value="206">Fort Heritage</option>
							<option value="207">Golden Tulip Hotel</option>
							<option value="208">Radisson BLU Hotel</option>
							<option value="209">The Imperial Hotel</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-3" style="padding: 6px 0px;">
						<span><i class="fas fa-calendar-alt"></i></span>
						<label class="" >Select Star Ratings</label>
					</div>
					<div class="col-md-5" style="margin:6px 0px;">
						<select id="h_type" name="h_type" required>
							<option value="">Select Your Hotel Ratings</option>
							<option value="3">3-Star</option>
							<option value="4">4-Star</option>
							<option value="5">5-Star</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-3" style="margin:6px 0px;">
						<span><i class="fas fa-calendar-alt"></i></span>
						<label class="">#Rooms</label>
					</div>
					<div class="col-md-5" style="margin:6px 0px;">
						<input type="number" placeholder="Number of Rooms" name="room" style="width:180px;" required />
						<select id="beds" name="beds" required>
							<option value="">#Bed</option>
							<option value="1">Single-Bed</option>
							<option value="2">Double-Bed</option>
						</select>
					</div>
				</div>
				<div class="row" style="margin:20px;">
					<div class="col-md-3"></div>
					<div class="col-md-5"></div>
					<div class="col-md-3">	
						<input type="submit" name="booking" value="Proceed for Payment" class="submit">
					</div>
				</div>
			</form>
			<!--End Booking Form-->
		</div>
	</div>
<?php 
	require_once "include/footer.php";
?>	