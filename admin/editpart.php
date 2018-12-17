
<?php
include ('pages/connection.php');
include ('header.php');


$product_id = $_GET['pid'];

$query = "select * FROM product where pro_id  = '$product_id'";
$result = mysql_query($query);

$row1 = mysql_fetch_array($result, MYSQL_ASSOC);


?>

		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms col-md-8">
					<h2 class="title1">New Product</h2>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							
						</div>
						<div class="form-body">
							<form action="pages/update.php" method="post" enctype="multipart/form-data">

							 <div class="form-group col-md-6"> <label >Product Type: </label>
							 <select  name="ptype" style="width: 40%; height: 35px;  border-radius: 3px;">
							 	<option value="">Select</option>
							 	<option  <?php if ($row1['pro_type'] == 'Trending') {echo 'selected';} ?> >Trending</option>
							 	<option  <?php if ($row1['pro_type'] == 'New Product') {echo 'selected';} ?>>New Product</option>
							 </select>
							 <input type="hidden" name="pro_id" value="<?php echo $product_id ?>">
							  </div>

							   <div class="form-group col-md-6"> <label >Product Rating: </label>
							 <select name="prating"  style="width: 40%; height: 35px; border-radius: 3px;">
							 	<option value="">Select Rating</option>
							 	<option <?php if ($row1['pro_rating'] == '1') {echo 'selected';} ?>>1</option>
							 	<option <?php if ($row1['pro_rating'] == '1.5') {echo 'selected';}?>>1.5</option>
							 	<option <?php if ($row1['pro_rating'] == '2') {echo 'selected';} ?>>2</option>
							 	<option <?php if ($row1['pro_rating'] == '2.5') {echo 'selected';} ?> >2.5</option>
							 	<option <?php if ($row1['pro_rating'] == '3') {echo 'selected';} ?> >3</option>
							 	<option <?php if ($row1['pro_rating'] == '3.5') {echo 'selected';} ?> >3.5</option>
							 	<option <?php if ($row1['pro_rating'] == '4') {echo 'selected';} ?> >4</option>
							 	<option <?php if ($row1['pro_rating'] == '4.5') {echo 'selected';} ?>">4.5</option>
							 	<option <?php if ($row1['pro_rating'] == '5') {echo 'selected';} ?> >5</option>

							 </select>
							  </div>
							

							 <div class="form-group"> <label >Product Name</label> <input type="text" value="<?php echo $row1['pro_name']?>" class="form-control" name="pname" placeholder="Product Name"> </div>

							 <div class="form-group"> <label >Product Price</label> <input type="num" class="form-control" value="<?php echo $row1['pro_price']?>" name="pprice" placeholder="Product Price"> </div>

							 <div class="form-group"> <label>Product Description</label>
							 <textarea rows="4" name="pdescription" class="form-control1 control2" value="<?php echo $row1['pro_description']?>" placeholder="Product Description"></textarea>
							 </div>



							

							  <div class="form-group"> <label>Upload Product Photo</label> 
							  	<input type="file" value="<?php echo $row1['pro_photo']?>" name="pphoto" >  
							  	<input type="hidden" value="<?php echo $row1['pro_photo']?>" name="hidden_pphoto" >  
							  </div> 

							

							  <button type="submit"  class="btn btn-default">Submit</button>
							   </form> 
						</div>
					</div>
				</div>
						<div class="col-md-4">
							  <?php echo "<img style='float:right;' class='img-thumbnail' src='uploads/".$row1['pro_photo']."'>"?>
						</div>
					</div>
				
			
		<?php include ('footer.php');?>
		