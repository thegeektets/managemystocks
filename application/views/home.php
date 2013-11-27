<!DOCTYPE html>
<html>
	
	<head>
		<!-- Title here -->
		<title>Manage my Stocks</title>
		<!-- Description, Keywords and Author -->
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="ResponsiveWebInc">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Lobster+Two' rel='stylesheet' type='text/css'>
		
		<link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,400italic' rel='stylesheet' type='text/css'>
		
		
		<?php $this->load->helper('url')?>
		<link href="<?php echo base_url("assets/css/bootstrap.min.css")?>" rel="stylesheet">
		<!-- Font awesome CSS -->
		<link href="<?php echo base_url("assets/css/font-awesome.min.css")?>" rel="stylesheet">		
		<!-- Custom CSS -->
		<link href="<?php echo base_url("assets/css/style.css")?>" rel="stylesheet">
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="#">
	</head>
	
	<body>
		
		<!-- Top Starts -->
		<div class="top">
			
			
			<!-- Header Starts -->
			<header>
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="logo">
								<h1><a href="#">Manage My Stocks <span class="tblue">.</span></a></h1>
							</div>
						</div>
						<div class="navigation pull-right">
							<a href="<?php $this->load->helper('url') ; echo base_url('index.php/welcome')?>">Home</a>
							<a href="<?php $this->load->helper('url') ; echo base_url('index.php/about')?>">About</a>
						    <a href="<?php $this->load->helper('url') ; echo base_url('index.php/contact')?>">Contact</a>
						</div>
					</div>
				</div>
			</header>
			<!-- Header Ends -->
			
			<!-- Hero starts -->
			<div class="hero">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<div class="intro">
								<h2>Simple<span class="tblue">.</span>Stock<span class="tblue">.</span> Manager<span class="tblue">.</span></h2>
								<p>Manage My Stock is a simple web application that solves the problem of viewing your own stock(s) from different investment companies in one place.</p><br />
								<a href="<?php echo base_url("index.php/users/register"); ?>" class="download"><i class=""></i>Register</a> <strong>or <a href="<?php echo base_url("index.php/users"); ?>" class="download"><i class=""></i>LogIn</a></strong>
								<div class="applinks">
									<a href="#"><i class="icon-twitter"></i></a>
									<a href="#"><i class="icon-facebook"></i></a>
									<a href="#"><i class="icon-linkedin"></i></a>
									<a href="#"><i class="icon-google-plus"></i></a>
									</div>
							</div>
						</div>
						<div class="col-md-4">
							<div class="shot">
								<img src="<?php echo base_url("assets/img/phone1.png") ?>" alt="image" class="img-responsive"/>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Hero ends -->
		</div>
		<!-- Top Ends -->
		
		<!-- Feature Starts -->
		<div class="features">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="feature-title text-center">
							<h3>Why Manage My Stock?</h3>
							<p>It shows you the current share holdings for only the companies that you have bought shares or stocks in. It also shows your shares in a graphical form which is easy to interprate and understand.</p>
						</div>
					</div>
				</div>
				
				<hr>
				
				I believe that you like what you see and you have enjoyed viewing our site, we share more in: 
				<br/><br/>
				<div class="row">
					<div class="col-md-3  col-xs-6">
						<div class="feat">
							<p><i class="icon-twitter-sign"></i></p>
							<h4>Twitter</h4>
							<p>Follow us on twitter : @manage_stock.</p>
						</div>
					</div>
					<div class="col-md-3 col-xs-6">
						<div class="feat">
							<p><i class="icon-facebook-sign"></i></p>
							<h4>Facebook</h4>
							<p>Like our facebook page : Manage My Stock</p>
						</div>
					</div>
					<div class="col-md-3 col-xs-6">
						<div class="feat">
							<p><i class="icon-linkedin-sign"></i></p>
							<h4>LinkedIn</h4>
							<p>Connect with us in LinkedIn : manage.stock@gmail.com</p>
						</div>
					</div>
					<div class="col-md-3 col-xs-6">
						<div class="feat">
							<p><i class="icon-google-plus-sign"></i></p>
							<h4>GooglePlus</h4>
							<p> Follow us on GooglePlus : manage.stock@gmail.com.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Feature Ends -->
		
		<!-- Shots starts -->
		<div class="shots">
			<div class="container">
				<!-- shot1-->
				
				<!-- shot1 ends -->
				
				<!-- shot2 -->
				
				<!-- shot2 ends -->
				
				<!-- shot3 -->
		<!-- Shots Ends -->	
		
		<!-- Footer starts -->
		<footer>
			<div class="container">				
				<div class="row">
					<div class="col-md-12">
						<div class="copy text-center">
							&copy; 2013 <a href="#">Manage My Stock</a> - Designed by <a href="#">Manage_my_stock designers.</a>
						</div>
					</div>
				</div>
				
			</div>
		</footer>
		<!-- Footer Ends -->
			
		<!-- Javascript files -->
		<!-- jQuery -->
		<script src="js/jquery.js"></script>
		<!-- Bootstrap JS -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Respond JS for IE8 -->
		<script src="js/respond.min.js"></script>
		<!-- HTML5 Support for IE -->
		<script src="js/html5shiv.js"></script>
		<!-- Custom JS -->
		<script src="js/custom.js"></script>
	</body>	

</html>