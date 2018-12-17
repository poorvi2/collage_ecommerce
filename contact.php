
<?php include('top_header.php');
	 $active= "contact";
?>
<body> 
	<!-- header modal -->
	
	<!-- header -->
	<?php include('header.php');?>
	<!-- //navigation -->
	<!-- banner -->
	<div class="banner banner11">
		<div class="container">
			<h2>Contact Us</h2>
		</div>
	</div>
	<!-- //banner -->    
	<!-- breadcrumbs -->
	<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
				<li>Contact Us</li>
			</ul>
		</div>
	</div>
	<!-- //breadcrumbs --> 
	<!-- mail -->
	<div class="mail">
		<div class="container">
			
			<div class="agile_mail_grids">
				<div class="col-md-5 contact-left">
					<h4>Address</h4>
					<p>Building No. 35 Anand Nagar, Risali
						<span>Bhilai, Chhattisgarh</span></p>
					<ul>
						<li> Mobile Number : (+91) 77798 77428</li>
						
						
						<li><a href="mailto:info@example.com"> Email: info@example.com</a></li>
					</ul>
				</div>
				<div class="col-md-7 contact-left">
					<h4>Contact Form</h4>
					<form action="#" method="post">
						<input type="text" name="Name" placeholder="Your Name" required="">
						<input type="email" name="Email" placeholder="Your Email" required="">
						<input type="text" name="Telephone" placeholder="Telephone No" required="">
						<textarea name="message" placeholder="Message..." required=""></textarea>
						<input type="submit" value="Submit" >
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>

			<div class="contact-bottom">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29766.621406054404!2d81.32077582882657!3d21.15925509936634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a293ca95b598f7f%3A0xaf9c2a48a7fbfcec!2sRisali%2C+Bhilai%2C+Chhattisgarh+490006!5e0!3m2!1sen!2sin!4v1533019089089"  allowfullscreen></iframe>
			</div>
		</div>
	</div>
	<!-- //mail -->

	<?php include('footer.php');?>