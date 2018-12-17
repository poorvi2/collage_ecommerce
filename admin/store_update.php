
<?php

include ('pages/connection.php');


include ('header.php');

$proid = $_GET['proid'];
$sid = $_GET['sid'];

$query1 = "select * from store where store_id ='$sid'";

$result1 = mysql_query($query1);

$row = mysql_fetch_array($result1,MYSQL_ASSOC)




?>



		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h2 class="title1">Update Store  According To Product </h2>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							
						</div>
						<form action="pages/store_update.php" method="post">
						<div class="col-md-6 form-body">
							 

							 <div class="form-group">
							
							  <label >Store Name</label> 
							  <input style="padding: 6px 12px; " type="text" name="sname" 
							  value="<?php echo $row['store_name']?>" class="form-control" placeholder="Store Name"> 

							  <input type="hidden" name="stoid" value="<?php echo $sid?>">
							  <input type="hidden" name="proid" value="<?php echo $proid?>">
							  </div>

							<div class="form-group"> <label >Store Price</label>
							 <input type="num" name="sprice" class="form-control" placeholder="Store Price"  value="<?php echo $row['store_price']?>">
							 </div>
						 

						  <button type="submit" class="btn btn-default">Update</button>
					 </form>

					  </div>


							

							  

							 
						</div>
					</div>
					
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php
include ('footer.php');

?>
		