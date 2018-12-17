
<?php

include ('pages/connection.php');


include ('header.php');

$product_id = $_GET['product'];

$query = "select * from store where pro_id = '$product_id'";

$result = mysql_query($query);




?>



		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h2 class="title1"> Add Store According to Products</h2>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							
						</div>
						<form action="pages/store-enter.php" method="post">
						<div class="col-md-6 form-body">
							 

							 <div class="form-group">
							
							  <label >Store Name</label> 
							  <input style="padding: 6px 12px; " type="text" name="sname" class="form-control" placeholder="Store Name"> 

							  <input type="hidden" name="proid" value="<?php echo $product_id?>">
							  </div>

							<div class="form-group"> <label >Store Price</label>
							 <input type="num" name="sprice" class="form-control" placeholder="Store Price">
							 </div>
						 

						  <button type="submit" class="btn btn-default">Submit</button>
					 </form>

					  </div>


							 <div class="col-md-6 table-responsive bs-example widget-shadow">
							 	<table class="table table-bordered"> <thead> <tr> <th>Store Name</th> <th>Store Price</th> <th>Edit</th> <th>Delete</th> </tr> </thead>
						 <tbody>
						  <tr> 
						 <?php
						 while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
						 	
						 	$store_id = $row['store_id'];
						 	$product_id = $row['pro_id'];
						 
						 echo "

						  <tr> 
						
						 <td>".$row['store_name']."</td> 
						 <td>".$row['store_price']."</td>
						  <td><a href='store_update.php?sid=$store_id&proid=$product_id''><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a></td> 
						<td><a href='pages/delete_store.php?sid=$store_id&proid=$product_id'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a></td>
						</tr>
						";}

						?>

						
						</tbody>
						</table>
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
		