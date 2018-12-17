
<?php 
include('pages/connection.php');
$active="products";
include('top_header.php');

$qry1= "select * from product order by pro_rating DESC ";	
$res1= mysql_query($qry1);
?>
<body> 
	<!-- navigation -->
	<?php include('header.php');?>
	<!-- //navigation -->
	<!-- banner -->
	<div class="banner banner11">
		<div class="container">
			<h2>Check Products <span>By </span> Ratings</h2> 
		</div>
	</div> 
	<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>


				<li>Ratings</li>
			</ul>
		</div>
	</div>
	<!-- //breadcrumbs --> 
	<!-- mobiles -->
	<div class="mobiles">
		<div class="container">
			<div class="w3ls_mobiles_grids">
				<div class="col-md-4 w3ls_mobiles_grid_left">
					<div class="w3ls_mobiles_grid_left_grid">
						<h3>Filter By</h3>
						<div class="w3ls_mobiles_grid_left_grid_sub">
							<div class="panel-group" >
							  <div class="panel panel-default">
								<div class="panel-heading" role="tab">
								  <h4 class="panel-title asd">
									<a class="pa_italic collapsed" role="button"  href="products.php" >
									  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>Products
									</a>
								  </h4>
								</div>
								
							  </div>
							</div>
								
							  <div class="panel panel-default">
								<div class="panel-heading" role="tab">
								  <h4 class="panel-title asd">
									<a class="pa_italic collapsed" role="button"  href="pricing.php" >
									  <span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>Pricing
									</a>
								  </h4>
								</div>
								
							  </div>
							</div>
							
					</div>
					</div>	
					
				</div>
				<div class="col-md-8 w3ls_mobiles_grid_right">
					

					<div class="w3ls_mobiles_grid_right_grid2">
						
						<div class="clearfix"> </div>
					</div>
					<?php while ($row1=mysql_fetch_array($res1,MYSQL_ASSOC)) {
						$proid=$row1['pro_id'];
						echo"
						<div class='w3ls_mobiles_grid_right_grid3'>
						 <div class='col-md-4 agileinfo_new_products_grid agileinfo_new_products_grid_mobiles'>
							<div class='agile_ecommerce_tab_left mobiles_grid'>
								<div class='hs-wrapper2'>
									<img src='admin/uploads/".$row1['pro_photo']."' alt=''  class='img-responsive' style='width:223px;height:297px;' />
									
								</div>
								<h5><a href='product-detail.php?proid=$proid'>".$row1['pro_name']."</a></h5> 
								<div class='simpleCart_shelfItem'>
									<p> <i class='item_price fa fa-inr'>".$row1['pro_price']."</i></p>
									
										<div class='rating1'>
								<div class='rating-left'>";?>
									<?php
								for($x=1;$x<=$row1['pro_rating'];$x++) {
								echo '<img src="images/starr.png" />';
								}
								if (strpos($row1['pro_rating'],'.')) {
								echo '<img src="images/star_half_empty.png" />';
								$x++;
								}
								while ($x<=5) {
								echo '<img src="images/light_star.png" />';
								$x++;
								}
							?>
								</div>
								
								<div class='clearfix'> </div>
							</div>
									
								</div> 
								
							</div>
						</div>
					</div>

					<?php }
					?>
					</div>
					<div class="clearfix"></div>
					
					
					

		
	<hr>
	<?php include('footer.php');?>