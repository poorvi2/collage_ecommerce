<?php

include('connection.php');


$productname = $_POST['pname'];
$productid = $_POST['pro_id'];
$productprice = $_POST['pprice'];
$productdescription = $_POST['pdescription'];
$producttype = $_POST['ptype'];
$productrating = $_POST['prating'];


$target_dir = "../uploads/";
$uploadOk = 1;

if (!empty($_FILES['pphoto']['name'])) {
	

	if (move_uploaded_file($_FILES['pphoto']['tmp_name'], $target_dir . basename($_FILES["pphoto"]["name"]))) {
		$photo = basename($_FILES["pphoto"]["name"]);

	}
	else {
		echo "Sorry There was an error uploading your file";
	}

	
}

else {
		$photo = $_POST['hidden_pphoto'];
	}



         $query = "update product set pro_name='$productname', pro_price='$productprice', pro_description='$productdescription', pro_photo='$photo', pro_type='$producttype', pro_rating='$productrating' where pro_id='$productid'";
         

$result = mysql_query($query);

header('location:../tables.php');


?>



