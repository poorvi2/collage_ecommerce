<?php
include ('pages/connection.php');

include ('header.php');

$query="select * from store inner join product on store.pro_id=product.pro_id"


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
							<form> <div class="form-group"> <label for="exampleInputEmail1">Product Name</label> <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Product Name"> </div>

							 <div class="form-group"> <label for="exampleInputPassword1">Product Price</label> <input type="num" class="form-control" id="exampleInputPassword1" placeholder="Product Price"> </div>
			<div class="form-group"> <label for="exampleInputEmail1">Product Info</label>
							 <textarea rows="4" class="form-control1 control2" placeholder="Product Information :"></textarea>
							 </div>

							  <div class="form-group"> <label for="exampleInputFile">Upload Product Photo</label> <input type="file" id="exampleInputFile">  </div> 

							  <button type="submit" class="btn btn-default">Submit</button> </form> 
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
		