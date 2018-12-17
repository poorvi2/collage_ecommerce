
<?php
include ('pages/connection.php');
$active="products";

include('top_header.php');
$proid=$_GET['proid'];

 $qry1= "select * from product where pro_id='$proid'";	
 $res = mysql_query($qry1);
 $row = mysql_fetch_array($res,MYSQL_ASSOC);

 $query="select * from store  WHERE pro_id='$proid' ORDER BY store_price DESC";
 $result=mysql_query($query);
?>
<body> 
	<!-- navigation -->
		<?php include('header.php');?>
	<!-- //navigation -->
	<!-- banner -->
	<div class="banner banner11">
		<div class="container">
			<h2>Detail Page</h2>
		</div>
	</div>
	<!-- //banner -->   
	<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
				<li>Detail Page</li>
			</ul>
		</div>
	</div>
	<!-- //breadcrumbs -->  
	<!-- single -->
	<div class="single">
		<div class="container">
			<div class="col-md-4 single-left">
				<div class="flexslider">
					<ul class="slides">
						<li data-thumb="images/a.jpg">
							<div class="thumb-image"> <?php echo "<img src='admin/uploads/".$row['pro_photo']."' data-imagezoom='true' class='img-responsive' alt=''> "?></div>
						</li>
						
					</ul>
				</div>
				<!-- flexslider -->
					<script defer src="js/jquery.flexslider.js"></script>
					<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
					<script>
					// Can also be used with $(document).ready()
					$(window).load(function() {
					  $('.flexslider').flexslider({
						animation: "slide",
						controlNav: "thumbnails"
					  });
					});
					</script>
				<!-- flexslider -->
				<!-- zooming-effect -->
					<script src="js/imagezoom.js"></script>
				<!-- //zooming-effect -->
			</div>
			<div class="col-md-6 single-right">
				<h3><?php echo $row['pro_name']; ?></h3>
				<h4>Best Price : <i class="fa fa-inr" style='color:#3c43a4' aria-hidden="true"></i> <?php echo $row['pro_price']; ?> </h4>
				<br>
				
			
				<div style="border:1px solid black;padding: 10px;height: 350px; overflow-y: scroll;" class="col-md-12">
					<?php
						while($row1=mysql_fetch_array($result,MYSQL_ASSOC)) {
							echo" <div style='padding: 0px;border-bottom: 1px dotted #ccc; ' class='col-md-6 brdr'>
							<h3> ".$row1['store_name']." </h3>
					
					</div>
					<div style='border-bottom: 1px dotted #ccc; ' class='col-md-6'><h3><i class='fa fa-inr' aria-hidden='true' style='color:#3c43a4'></i> ".$row1['store_price']."</h3></div>

					<div class='clearfix'></div>

					";
					
							
						}
					?>
					

					

			
				</div>
	</div> 
	<div class="additional_info">
		<div class="container">
			<div class="sap_tabs">	
				<div id="horizontalTab1" style="display: block; width: 100%; margin: 0px;">
					<ul>
						<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>Product Information</span></li>
						
					</ul>		
					<div class="tab-1 resp-tab-content additional_info_grid" aria-labelledby="tab_item-0">
						<h3><?php echo $row['pro_name']; ?></h3>
						<p><?php echo $row['pro_description']; ?>.</p>
					</div>	

					
						
			<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
			<script type="text/javascript">
				$(document).ready(function () {
					$('#horizontalTab1').easyResponsiveTabs({
						type: 'default', //Types: default, vertical, accordion           
						width: 'auto', //auto or any width like 600px
						fit: true   // 100% fit in a container
					});
				});
			</script>
		</div>
	</div>
</div></div></div>
	<!-- Related Products -->
	
	<!-- //Related Products -->
	
	<!-- //single -->
	<hr>
	
	<?php include('footer.php');?>