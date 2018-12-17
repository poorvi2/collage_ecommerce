<?php

include('connection.php');

$storename = $_POST['sname'];
$storeprice = $_POST['sprice'];

$proid= $_POST['proid'];


$query ="insert into store(store_name,store_price,pro_id) values ('$storename','$storeprice','$proid')"; 



$result = mysql_query($query);

header('location:../add-store.php?product='.$proid.'');


?>