
<?php
include ('pages/connection.php');
include ('header.php');


$query = "select * from product";
$result = mysql_query($query);

?> 

		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="tables">
					
					<div class="table-responsive bs-example widget-shadow">
						<h4>Product Details:</h4>
						<table class="table table-bordered"> <thead> <tr> <th>Type</th> <th>Rating</th> <th>Product Name</th> <th>Product Price</th> <th>Product Photo</th> <th>Add Store</th> <th>Update</th> <th>Delete</th> </tr> </thead>
						 <tbody>
						
						 <?php
						 while ($row = mysql_fetch_array($result, MYSQL_ASSOC)) {
						 	
						 	$product_id = $row['pro_id'];
						 
						 echo "
						  <tr> 
						 <td>".$row['pro_type']."</td> 
						 <td>".$row['pro_rating']."</td> 
						
						 <td>".$row['pro_name']."</td> 
						 <td>".$row['pro_price']."</td>
						  <td><img width='50px;' src='uploads/".$row['pro_photo']."'></td>
						  <td><a href='add-store.php?product=".$row['pro_id']."'><span class='glyphicon glyphicon-plus' aria-hidden='true'></span></a></td>
						  <td><a href='editpart.php?pid=$product_id'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a></td> 
						<td><a href='pages/delete_product.php?pid=$product_id'><span class='glyphicon glyphicon-trash' aria-hidden='true'></span></a></td>
						</tr>
						";}

						?>

						
						 </tbody> </table> 
					</div>
				</div>
			</div>
		</div>

	<?php
include ('footer.php');

?>