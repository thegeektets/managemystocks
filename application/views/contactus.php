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
			<div class="hero inner-page">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="intro">
								<h2>Contact Us<span class="tblue">.</span></h2>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Hero ends -->
		</div>
		<!-- Top Ends -->
		
		<!-- Contact starts -->
		<div class="contact">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						
						<!-- Map starts -->
						<div class="map">
							<iframe height="500" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?!q=Kenyatta University&amp;oe=utf-8&amp;client=firefox-a&amp;ie=UTF8&amp;hq=&amp;hnear=Kenyatta University&amp;t=m&amp;z=9&amp;output=embed"></iframe>
										
						</div>
						<!-- Map Ends -->
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<div class="formdetails well">
							<form class="form-horizontal" role="form">
								<fieldset>
									<legend>Contact Form</legend>
									<div class="form-group">
										<label for="inputName" class="col-lg-3 control-label">Name</label>
										<div class="col-lg-9">
										  <input type="name" class="form-control" id="inputName" placeholder="">
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail" class="col-lg-3 control-label">Email</label>
										<div class="col-lg-9">
										  <input type="email" class="form-control" id="inputEmail" placeholder="">
										</div>
									</div>
									
									<div class="form-group">
										<label for="inputComment" class="col-lg-3 control-label">Comment</label>
										<div class="col-lg-9">
										  <textarea class="form-control" rows="3"></textarea>
										</div>
									</div>
									<div class="form-group">
										<div class="col-lg-offset-3 col-lg-9">
											<button type="submit" class="btn btn-primary">Submit</button>
											<button type="submit" class="btn btn-default">Reset</button>
										</div>
									</div>
								</fieldset>
							</form>
						</div>
					</div>
					<div class="col-md-6 col-sm-6">
						<div class="well">
							
								<fieldset>
									<legend>Address</legend>
									<address>
										  <strong>Manage My Stocks.</strong><br>
										  Kenya, Nairobi : 47773-00100<br>
										  <i class="icon-phone-sign"></i> : +254715-274-848
									</address>
									<address>
										  <i class="icon-envelope-alt"></i><br>
										  <a href="mailto:#">manage.stocks@gmail.com</a>
									</address>
								</fieldset>
					
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- contact ends -->
		
		<!-- Footer starts -->
		<footer>
			<div class="container">				
				<div class="row">
					<div class="col-md-12">
						<div class="copy text-center">
							&copy; 2013 <a href="#">Manage My Stock</a> - Designed by <a href="http://responsivewebinc.com/">Manage_my_stock designers.</a>
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

<!-- Mirrored from responsivewebinc.com/premium/fasi/contactus.html by HTTrack Website Copier/3.x [XR&CO'2013], Sun, 13 Oct 2013 07:42:23 GMT -->
</html>