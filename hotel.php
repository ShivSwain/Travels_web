<?php 
	require_once "include/header.php";
    
	$sql="select * from hotels where hotel_id='".$_GET["hid"]."'";
	$row=mysqli_query($con,$sql);
	$result=mysqli_fetch_array($row);	
?>
<div class="container-fluid">
	<div class="container">
		<div class="row">
			<div class="col-lg-12  ">
				<h2><?php echo $result["h_name"];?> - <span>HOTEL DETAIL</span></h2>
			</div>
		</div>
		<div class="col-lg-3 row-num2  ">
			<h5 style="font-style: bolder; margin-top:20px; ">Available Packages</h5>
			<p class="	" style="border:1px solid rgb(255,193,7);width:220px;"></p>
			<div class="package-box-num">
				<div class="  p-img-box">
					<img src="images/4441.jpg" width="100%" height="150" />
						<a href="package.php?pack=303">
							<p class="p-name-style">
								Backwater of Kerala
							</p>	
						</a>
						<p class="p-route-style"><i class="fas fa-map-marker-alt"> </i> 3 Days / 2 Nights</p>
				</div>
				<div class="  p-img-box">
					<img src="images/2187.jpg" width="100%" height="150" />
					<a href="package.php?pack=302">
						<p class="p-name-style">
							Goa Paradise Beach
						</p>
					</a>
						<p class="p-route-style"><i class="fas fa-map-marker-alt"> </i> 6 Days / 5 Nights</p>
				</div>
				<div class="  p-img-box" >
					<img src="images/4439.jpg" width="100%" height="150" />
					<a href="package.php?pack=305">
						<p class="p-name-style">
							Short Tour of Rajasthan
						</p>
					</a>
					<p class="p-route-style"><i class="fas fa-map-marker-alt"> </i> 5 Days / 4 Nights</p>
				</div>
			</div>	
			<p style="margin-top:50px;">Available Hotels</p>
			<p class="	" style="border:1px solid rgb(255,193,7);width:220px;"></p>
			<div class="  p-img-box">
				<img src="images/4441.jpg" width="100%" height="150" />
					<a href="hotel.php?hid=215">
						<p class="p-name-style">
							THE MARK HOTEL
						</p>	
					</a>
					<p class="p-route-style"><i class="fas fa-map-marker-alt"> </i> 3 Days / 2 Nights</p>
			</div>
			<div class="  p-img-box">
				<img src="images/2187.jpg" width="100%" height="150" />
				<a href="hotel.php?hid=218">
					<p class="p-name-style">
						RADISSON HOTEL
					</p>
				</a>
					<p class="p-route-style"><i class="fas fa-map-marker-alt"> </i> 6 Days / 5 Nights</p>
			</div>
			
			<!---- Box Here  -->

		</div>
		<div class="col-lg-9   row-num2">
			<span class="content-heading"><?php echo $result["h_name"];?></span><br />
			<span><i class="fas fa-map-marker-alt"></i> <?php echo $result["address"];?></span><br />
			<div class="  img-heading ">
				 <span class="title-gap">Overview</span>
				 <span>Amenties</span>
				 <p class=" " style="border:1px solid rgb(255,193,7);width:300px;"></p>
			</div>
			<!----------------- Hotel Images ---------------->
			<div class="htl-img-box">
				<?php 
					echo $result["image"];
				?>
			<!--
				<img src="images/hotels/785.jpg" class="img-num1" />
				<img src="images/hotels/786.jpg" class="img-num1" />
				<img src="images/hotels/787.jpg" class="img-num1" />
				<img src="images/hotels/788.jpg" class="img-num1" />
				<img src="images/hotels/789.jpg" class="img-num1" />
				<img src="images/hotels/790.jpg" class="img-num1" />
				<img src="images/hotels/791.jpg" class="img-num1" />
				<img src="images/hotels/792.jpg" class="img-num1" />
				<img src="images/hotels/793.jpg" class="img-num1" />
			-->
			</div>
			<div class="  gap1">
				<p class="content2"></p>
				 <?php echo $result["description"];?>
				
			</div>

			<div class="  gap1">
				<span class="content1">AMENTIES</span><br />
				<p class=" " style="border:1px solid rgb(255,193,7);width:300px;"></p>
				<span class="content3" style="font-style:bolder;">Room Facility</span>

				<ul class="room-content"> 
					<li class="room-content1">Safe</li>
					<li class="room-content1">24 Hour Room Service</li>
					<li class="room-content1">Central Air Condition</li>
				</ul>
				<ul class="  room-content"> 
					<li class="room-content1">Laundry</li>
					<li class="room-content1">Tea Coffee Maker</li>
					<li class="room-content1">Internet Facility</li>
				</ul>
				<ul class="  room-content"> 
					<li class="room-content1">Wireless Internet</li>
					<li class="room-content1">Satellite Cable TV</li>
					<li class="room-content1"> Direct Dial Telephone</li>
				</ul>
				<span class="content3" style="font-style:bolder;">Service facilitiy</span>

				<ul class="  room-content"> 
					<li class="room-content1">Fresh Water Pool</li>
					<li class="room-content1">Beauty Salon</li>
					<li class="room-content1">Health Club</li>
				</ul>
				<ul class="  room-content"> 
					<li class="room-content1">Restaurant</li>
					<li class="room-content1">Business Center</li>
					<li class="room-content1">24 Hour Reception</li>
				</ul>
				
			</div>
		</div>
	</div>
</div>	

<?php
		require_once "include/footer.php";
?>