
<?php
include ('pages/connection.php');

include ('header.php');

?>

		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page">
				<div class="forms">
					<h2 class="title1">New Product</h2>
					<div class="form-grids row widget-shadow" data-example-id="basic-forms"> 
						<div class="form-title">
							
						</div>
						<div class="form-body">
							<form action="pages/insert.php" method="post" enctype="multipart/form-data">

							 <div class="form-group col-md-6"> <label >Product Type: </label>
							 <select  name="ptype" style="width: 40%; height: 35px;  border-radius: 3px;">
							 	<option value="">Select</option>
							 	<option value="Trending">Trending</option>
							 	<option value="New Product">New Product</option>
							 </select>
							  </div>

							   <div class="form-group col-md-6"> <label >Product Rating: </label>
							 <select name="prating" style="width: 40%; height: 35px; border-radius: 3px;">
							 	<option value="">Select Rating</option>
							 	<option value="1">1</option>
							 	<option value="1.5">1.5</option>
							 	<option value="2">2</option>
							 	<option value="2.5">2.5</option>
							 	<option value="3">3</option>
							 	<option value="3.5">3.5</option>
							 	<option value="4">4</option>
							 	<option value="4.5">4.5</option>
							 	<option value="5">5</option>

							 </select>
							  </div>
							

							 <div class="form-group"> <label >Product Name</label> <input type="text" class="form-control" name="pname" placeholder="Product Name"> </div>

							 <div class="form-group"> <label >Product Price</label> <input type="num" class="form-control" name="pprice" placeholder="Product Price"> </div>

							 <div class="form-group"> <label>Product Description</label>
							 <textarea rows="4" name="pdescription" class="form-control1 control2" placeholder="Product Description"></textarea>
							 </div>



							

							  <div class="form-group"> <label>Upload Product Photo</label> <input type="file"  name="pphoto" id="exampleInputFile">  </div> 

							

							  <button type="submit"  class="btn btn-default">Submit</button>
							   </form> 
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
		