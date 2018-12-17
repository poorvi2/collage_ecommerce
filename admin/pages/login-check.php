
<?php

session_start();

include('connection.php');

$user =  $_POST['username'];
$pass =  $_POST['password'];

$query = "select * FROM admin where aloginname = '$user' and aloginpassword = '$pass'";


$result = mysql_query($query);
$numrow = mysql_num_rows($result);



if ($numrow == 1 ) {
	$record = mysql_fetch_array($result, MYSQL_ASSOC);
	$_SESSION['login_id'] = $record['aid'];
	$_SESSION['logged_in'] = 1;

	header('location:../index.php');
}

else {
	header('location:../login.php?err=1');
}

?>