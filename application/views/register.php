<!DOCTYPE html>
<html>
<head>
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
								<h1><a href="#">Manage My Stock <span class="tblue">.</span></a></h1>
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
								<h2>Register with Us<span class="tblue">.</span></h2>
								
							</div>>
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
					<div class="col-md-6 col-sm-6">
						<div class="formdetails well">
                       <?php echo form_open('users/register'); ?> 
        					<fieldset>
									<legend>Register</legend>
									<div class="form-group">
										<label for="inputName" class="col-lg-4 control-label">User Name</label>
										<div class="col-lg-9">
										  <input type="name" class="form-control" id="inputName" placeholder="username" name = "username" value="<?php echo set_value('username'); ?>">
										  <?php echo form_error('username'); ?>
										</div>
									</div>
									<div class="form-group">
										<label for="inputName" class="col-lg-4 control-label">Full Names</label>
										<div class="col-lg-9">
										  <input type="name" class="form-control" id="inputName" placeholder="fullname" name = "fullname" value="<?php echo set_value('fullname'); ?>">
										  <?php echo form_error('fullname'); ?>
										</div>
									</div>
									<div class="form-group">
										<label for="inputEmail" class="col-lg-4 control-label">Email</label>
										<div class="col-lg-9">
										  <input type="email" class="form-control" id="inputEmail" placeholder="emailaddress" name = "email" value="<?php echo set_value('email'); ?>">
										  <?php echo form_error('email'); ?>
										</div>
									</div>
									<div class="form-group">
										<label for="inputName" class="col-lg-4 control-label">Password</label>
										<div class="col-lg-9">
										  <input type="password" class="form-control" id="inputName" placeholder="password" name = "password" value="<?php echo set_value('password'); ?>">
										 <?php echo form_error('password'); ?>
										</div>
									</div>
									<div class="form-group">
										<label for="inputName" class="col-lg-5 control-label">Confirm Password</label>
										<div class="col-lg-9">
										  <input type="Password" class="form-control" id="inputName" placeholder="confirm" name = "cpassword" value="<?php echo set_value('cpassword'); ?>">
										  <?php echo form_error('cpassword'); ?>
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
									<legend>Registration</legend>
									<div class="col-md-12">
											<li>Choose the user name you will be using.</li>
											<li>Give your full names.</li>
											<li>Give a valid amail address.</li>
											<li>GIve the password you will be using.</li>
											<li>onfirm the password you wish to be using.</li>
											<li>You are good to go.</li>
									</div>
								</fieldset>
					
						</div>
						<div class="well">
							
								<fieldset>
									<legend>Designers'</legend>
									<div class="col-md-12">
											<ul>
											<li>Mageto Denis</li>
											<li>Griffin Muteti</li>
											<li>Brian Mosigisi</li>
											<li>Joseph Mwaa</li>
											<li>Kevin Ngari</li>
											</ul>
									</div>
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