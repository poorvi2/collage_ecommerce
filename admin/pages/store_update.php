<?php

include('connection.php');

$storename = $_POST['sname'];
$storeprice = $_POST['sprice'];

$sid= $_POST['stoid'];
$pid= $_POST['proid'];


$query ="update  store set store_name='$storename',store_price='$storeprice' where store_id='$sid'"; 



$result = mysql_query($query);

header('location:../add-store.php?product='.$pid.'');


?>