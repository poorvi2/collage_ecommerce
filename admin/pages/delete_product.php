<?php
	include('connection.php');

	$product_id = $_GET['pid'];

	$query= "delete  from product where pro_id='$product_id' ";
	

	$res=mysql_query($query);

	header('location:../tables.php');
?>