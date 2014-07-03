<!DOCTYPE html>
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
   <meta charset="utf-8" />
   <title>Register | Manage My Stocks</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="" name="author" />
   <?php $this->load->helper('url'); ?>
   <link href="<?php echo base_url("assets/dashboard/assets/bootstrap/css/bootstrap.min.css") ?>"rel="stylesheet" />
   <link href="<?php echo base_url("assets/dashboard/assets/bootstrap/css/bootstrap-responsive.min.css") ?>" rel="stylesheet" />
   <link href="<?php echo base_url("assets/dashboard/assets/font-awesome/css/font-awesome.css") ?>" rel="stylesheet" />
   <link href="<?php echo base_url("assets/dashboard/css/style.css") ?>" rel="stylesheet" />
   <link href="<?php echo base_url("assets/dashboard/css/style-responsive.css") ?>" rel="stylesheet" />
   <link href="<?php echo base_url("assets/dashboard/css/style-default.css") ?>" rel="stylesheet" id="style_color" />
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="lock">
    <div class="lock-header">
        <!-- BEGIN LOGO -->
        <a class="center" id="logo" href="index.html">
          <h1>Manage My Stocks</h1>
            <h2><?php //echo $success ?></h2>
            <h3><?php echo form_error('username') . form_error('fullname').form_error('email'). form_error('password').form_error('cpassword');  ?></h3>
          </a>
        <!-- END LOGO -->
    </div>
    <div class="login-wrap">

      
        <div class="metro double-size gray">
            <form <?php echo form_open('users/register'); ?> 
                <div class="input-append lock-input">
                    <input type="text" class="" name ="username" value="<?php echo set_value('username'); ?>" placeholder ="User Name:" required = "true">
                    
                </div>
        </div>

        <div class="metro double-size gray">
                  <div class="input-append lock-input">
                    <input type="text" class="" name ="fullname" value="<?php echo set_value('fullname'); ?>" placeholder ="Full Name:" required = "true">
                    
                </div>
        </div>
        <div class="metro double-size gray">
     
                <div class="input-append lock-input">
                   <input type="email" class="form-control" id="inputEmail" placeholder="Your Email:" name = "email" value="<?php echo set_value('email'); ?>">
                  </div>
        </div>
        <div class="metro double-size gray">
     
                <div class="input-append lock-input">
                   <input type="password" class="form-control" id="inputEmail" placeholder="Password" name = "password" value="<?php echo set_value('password'); ?>">
                  </div>
        </div>
        <div class="metro double-size gray">
     
                <div class="input-append lock-input">
                   <input type="password" class="form-control" id="inputEmail" placeholder="CPassword" name = "cpassword" value="<?php echo set_value('cpassword'); ?>">
                  </div>
        </div>
        <div class="metro double-size terques login">
                <button type="submit" class="btn login-btn">
                    Register
                         </button>
            </form>
        </div>
        <div class="metro double-size navy-blue ">
            <a href="#" class="social-link">
                       </a>
        </div>
        <div class="metro double-size navy-blue ">
            <a href="#" class="social-link">
                       </a>
        </div>
        <div class="metro double-size navy-blue ">
            <a href="#" class="social-link">
                       </a>
        </div>
        <div class="login-footer">
            <div class="remember-hint pull-left">
                <input type="checkbox" id=""> Remember Me
            </div>
            <div class="forgot-hint pull-right">
                <a id="forget-password" class="" href="javascript:;">Already have an account ? <a href="<?php echo base_url("index.php/users")?>">Login</a></a>
            </div>
        </div>
    </div>
     <div id="footer">
       2013 &copy; <a href ="<?php echo base_url() ?>">Manage My Stocks</a>
   </div>
</body>
<!-- END BODY -->
</html>