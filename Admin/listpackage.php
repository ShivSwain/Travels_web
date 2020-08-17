<?php
	include_once "include/header.php.";
?>
	<div class="container">
					<h2>Package List</h2>
					<p class="	" style="border:1px solid rgb(255,193,7);width:420px;"></p>
			<?php 
				$hquery="select * from package";
				$hsql=mysqli_query($con,$hquery);
				$i=0;
				while($i<=($hresult=mysqli_fetch_array($hsql)))
				{
			?>
				<div style="">
					
				</div>
				<div class="row">
					<div class="col-lg-1"></div>
					<div class="h_style col-lg-4">
						<a href="viewpackage.php?pid=<?php echo $hresult['id'] ?>" > 
						<?php
							echo $hresult["name"];
						?>	
					</a>
					</div>
				</div>
			<?php
					$i++;

				}
			?>
	</div>
<?php
	require_once "include/footer.php";
?>