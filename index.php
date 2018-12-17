<?php include('pages/connection.php');
$active="index";
?>
<?php 
	$query="select * from product ORDER By pro_rating DESC";
	$res= mysql_query($query);


?>
<?php include('top_header.php');?> 
<body>
	<!-- for bootstrap working -->
	<?php include('header.php');?>
	<!-- Start WOWSlider.com BODY section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
		<li><img src="data1/images/ban1.jpg" alt="ban1" title="ban1" id="wows1_0"/></li>
		<li><a href="#"><img src="data1/images/ban2.jpg" alt="jquery slideshow" title="ban2" id="wows1_1"/></a></li>
		<li><img src="data1/images/ban3.jpg" alt="ban3" title="ban3" id="wows1_2"/></li>
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="ban1"><span><img src="data1/tooltips/ban1.jpg" alt="ban1"/>1</span></a>
		<a href="#" title="ban2"><span><img src="data1/tooltips/ban2.jpg" alt="ban2"/>2</span></a>
		<a href="#" title="ban3"><span><img src="data1/tooltips/ban3.jpg" alt="ban3"/>3</span></a>
	</div></div><div class="ws_script" style="position:absolute;left:-99%"><a href="#"></a></div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->
<hr>
	
	

	<!-- trending-products -->
	<div style="background: #fffcdf;" class="new-products">
		<div class="container">
			<h3>Trending Products</h3>
			<div class="agileinfo_new_products_grids">
				<?php while ($row= mysql_fetch_array($res,MYSQL_ASSOC)) {
					$pid = $row['pro_id'];
							
						echo"
				<div class='col-md-3 agileinfo_new_products_grid'>
					<div class='agile_ecommerce_tab_left agileinfo_new_products_grid1'>
						
						<div class='hs-wrapper1'>

							<img src='admin/uploads/".$row['pro_photo']."' style='width: 250px; height: 340px;padding-top:25px;' alt='Image' class='img-responsive'  />
							
							
						</div>
						<h5><a href='product-detail.php?proid=$pid'>".$row['pro_name']."</a></h5>
						<div class='simpleCart_shelfItem'>
							<p><i class='item_price fa fa-inr'> ".$row['pro_price']."</i></p>";?>
							<?php
								for($x=1;$x<=$row['pro_rating'];$x++) {
								echo '<img src="images/starr.png" />';
								}
								if (strpos($row['pro_rating'],'.')) {
								echo '<img src="images/star_half_empty.png" />';
								$x++;
								}
								while ($x<=5) {
								echo '<img src="images/light_star.png" />';
								$x++;
								}
							?>
						</div>
					</div>
				</div>
				<?php }
						?>
				
						
				
				
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //trending-products -->

	<hr>
	
	
	<hr>
	
	<?php include('footer.php'); ?>