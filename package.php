<?php 
	include "include/header.php";
?>
<!--- Head section    --->
	<div class="img-box-content borders">
		<?php 
					$pack_sql="SELECT * FROM Package p JOIN package_detail_itinerary pdi on p.id=pdi.Package_ID where pdi.Package_ID='".$_GET["pack"]."'";
					$pack_row=mysqli_query($con,$pack_sql);
					$pack_detail=mysqli_fetch_array($pack_row);		
				?>
		<div  class="goa-title">
			<div class="images-num"> <?php echo $pack_detail["image"]; ?> </div>
			<section class="img-content"><h2 style="font-size: 3vw;"><?php echo $pack_detail["name"]; ?> -<span style="font-style:3vw; color:rgb(255,193,7); "> PACKAGE DETAIL</span> </h2></section>
		</div>
	</div>
	<!---               Image section ends       -->
<div class="container-fluid">
	<div class="container">
		<div class="row">
			 <div class="col-lg-12">
			 	
			 </div>
		</div>
		<div class="row" style="margin-top:30px; ">
			<!---     right section -->
			<div class="col-lg-4">
				<span>
					<h2>Tour By Interest</h2>				
				</span>
				<p class="	" style="border:1px solid rgb(255,193,7);width:320px;"></p>
				<ul class="left-part-menu">
					<li name="taj" id="taj">
								<a href="package.php?pack=301"> 
									Beauty of Taj Mahal Gateway
								</a>
							</li>
							<li>
								<a href="package.php?pack=302"> 
									Goa Paradise Beach
								</a>
							</li>
							<li>
								<a href="package.php?pack=303"> 
									Backwater of Kerala
								</a>
							</li>
							<li>
								<a href="package.php?pack=304"> 
									Mesmeirizing Golden Temple
								</a>
							</li>
							<li>
								<a href="package.php?pack=305"> 
									Short Tour of Rajasthan
								</a>
							</li>
							<li>
								<a href="package.php?pack=306"> 
									Mumbai Tour
								</a>
							</li>
							<li>
								<a href="package.php?pack=307"> 
									Chennai Tour
								</a>
							</li>
							<li>
								<a href="package.php?pack=308"> 
									Kolkata Tour
								</a>
							</li>
							<li>
								<a href="package.php?pack=309"> 
									Varanasi Tour
								</a>
							</li>
				</ul>
			</div>
			<!--    main Section       -->
			<div class="col-lg-8">
				
				<div>
					<h2><?php echo $pack_detail["name"]; ?></h2>
				</div>
				<span><i class="fas fa-map-marker-alt"> </i> <?php echo $pack_detail["route"]; ?></span>
				<div class="content-time"> 
					 <h2><i class="far fa-clock"> </i> <?php echo $pack_detail["duration"]; ?></h2>
				</div>
				<!----    Route Map --->
				<div class="map-img">
					<?php echo $pack_detail["map"]; ?>
				</div>
				<!-- End --> 
				<div class="" style="margin: 30px 0px;">
					<h3 style="font-weight: bolder;">Detailed Itinerary</h3>
					<p class=" " style="border:1px solid rgb(255,193,7);width:500px;"></p>
				</div>
				<?php
					$row2="SELECT * FROM package_detail_itinerary where Package_ID='".$_GET["pack"]."'";		
					$row3=mysqli_query($con,$row2);
						
					$i=0;
				
					while($i<=($sql_pack=mysqli_fetch_array($row3)))
					{
					 	
					?>
				<!--<div class="map-icon borders">
					<div class="cir-map">
						<i class="fas fa-map-marker-alt"></i>
					</div>
					<div class="line-height borders">

					</div>	
				</div> -->
			    	<div class="" style="margin-left:20px; ">
			    			<p style="text-align: justify;">
			    				<h2 style="margin-bottom: 20px;">Day <?php echo $sql_pack["day"]; ?></h2>
			    				<?php echo $sql_pack["content"]; ?><br />	
			    			</p>
			    	</div>
			     <?php	
					 $i++;
				   	}
				?>
			</div>	
			<div class="row">
				<div class="col-lg-9">
				</div>
				<div class="col-lg-3" style="margin-bottom: 20px;">
					<?php
							if(isset($_SESSION['user_id']))
							{
								echo "<form action='payment.php' >";
							}
							else
							{
								echo "<form action='admin/login.php' >";
							}
						?>
					<input type="submit"  class="pkg_btn" value="Start Your Trip" >

				</div>
			</div>
			<!-- End main section -->
		</div>	
		 
	</div>
</div>
<!--- Head section end    --->
<?php
	
		require_once "include/footer.php";

?>