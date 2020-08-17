<?php

	include_once "include/header.php";
?>

		<div class="container-fluid">
			<div class="col-lg-1" style="border:1px solid;">Name</div>
			<div class="col-lg-2" style="border:1px solid;">Email</div>
			<div class="col-lg-1" style="border:1px solid;">Password</div>
			<div class="col-lg-2" style="border:1px solid;">Address</div>
			<div class="col-lg-2" style="border:1px solid;">DOB</div>
			<div class="col-lg-1" style="border:1px solid;">City</div>
			<div class="col-lg-1" style="border:1px solid;">State</div>
			<div class="col-lg-1" style="border:1px solid;">Pincode</div>
			<div class="col-lg-1" style="border:1px solid;">Contact_No</div>
		
		<?php
			$cquery="select * from users";
			$csql=mysqli_query($con,$cquery);
			$i=0;
			while($i<=($cresult=mysqli_fetch_array($csql)))
			{
		?>	
			<div class="col-lg-1" style="border:1px solid;">
				<?php echo $cresult["name"]; ?>
			</div>
			<div class="col-lg-2" style="border:1px solid;"><?php echo $cresult["email"]; ?></div>
			<div class="col-lg-1" style="border:1px solid;"><?php echo $cresult["password"]; ?></div>
			<div class="col-lg-2" style="border:1px solid;"><?php echo $cresult["address"]; ?></div>
			<div class="col-lg-2" style="border:1px solid;"><?php echo $cresult["birthday"]; ?></div>
			<div class="col-lg-1" style="border:1px solid;"><?php echo $cresult["city"]; ?></div>
			<div class="col-lg-1" style="border:1px solid;"><?php echo $cresult["state"]; ?></div>
			<div class="col-lg-1" style="border:1px solid;"><?php echo $cresult["pincode"]; ?></div>
			<div class="col-lg-1" style="border:1px solid;"><?php echo $cresult["contact_no"]; ?></div>
	<?php
			$i++;
		}
	?>
</div>