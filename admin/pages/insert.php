<?php

include('connection.php');


$productname = $_POST['pname'];
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
		$photo = "";
	}



 $query = "insert into product(pro_name,pro_price,pro_description,pro_photo,pro_type,pro_rating) values ('$productname','$productprice','$productdescription',      '$photo','$producttype','$productrating')"; 

$result = mysql_query($query);

header('location:../tables.php');


?>



