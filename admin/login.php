
<!DOCTYPE HTML>
<html>
<head>
<title>Best Price | Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />

<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />

<!-- font-awesome icons CSS-->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome icons CSS-->

 <!-- side nav css file -->
 <link href='css/SidebarNav.min.css' media='all' rel='stylesheet' type='text/css'/>
 <!-- side nav css file -->
 
 <!-- js-->
<script src="js/jquery-1.11.1.min.js"></script>
<script src="js/modernizr.custom.js"></script>

<!--webfonts-->
<link href="//fonts.googleapis.com/css?family=PT+Sans:400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,latin-ext" rel="stylesheet">
<!--//webfonts-->
 
<!-- Metis Menu -->
<script src="js/metisMenu.min.js"></script>
<script src="js/custom.js"></script>
<link href="css/custom.css" rel="stylesheet">
<!--//Metis Menu -->

</head> 

		<!-- main content start-->
		<div id="page-wrapper">
			<div class="main-page login-page ">
				<h2 class="title1">Login</h2>
				<div class="widget-shadow">
					<div class="login-body">
					<?php

					if (!empty($_GET['err'])&&$_GET['err']==1) {
						echo "<p style='color:red; text-align:center;'>invalid login. please check!!</p>";
					}

					?>
						<form action="pages/login-check.php" method="post">
							<input type="text" class="user" name="username" placeholder="User Name" required="">
							<input type="password" name="password" class="lock" placeholder="Password" required="">
							
							<input type="submit" name="Sign In" value="Sign In">
							
						</form>
					</div>
				</div>
				
			</div>
		</div>
		<?php 

		include('footer.php')
		 ?>