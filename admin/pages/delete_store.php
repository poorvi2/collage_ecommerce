<?php
	include('connection.php');

	$store_id = $_GET['sid'];
	$product_id =$_GET['proid'];
	

	$query= "delete  from store where store_id='$store_id' ";
	

	$res=mysql_query($query);

	header('location:../add-store.php?product='.$product_id.'');
?>