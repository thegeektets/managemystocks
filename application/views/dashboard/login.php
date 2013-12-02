<!DOCTYPE html>
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<!-- BEGIN HEAD -->

<head>
   <meta charset="utf-8" />
   <title>Login | Manage My Stocks</title>
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
            <h2><?php echo $success ?></h2>
            <h3><?php echo form_error('user') . form_error('pass');  ?></h3>
          </a>
        <!-- END LOGO -->
    </div>
    <div class="login-wrap">

        <div class="metro single-size terques">
            <div class="locked">
                 </div>
        </div>

        <div class="metro double-size gray">
            <form <?php echo form_open('users/index'); ?> 
                <div class="input-append lock-input">
                    <input type="text" class="" placeholder="Username" name ="user" value="<?php echo set_value('user'); ?>">
                    
                </div>
        </div>
        <div class="metro double-size gray">
     
                <div class="input-append lock-input">
                    <input type="password" class="" placeholder="Password" name ="pass" value="<?php echo set_value('pass');  ?>">
                    
                </div>
        </div>
        <div class="metro single-size terques login">
                <button type="submit" class="btn login-btn">
                    Login
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
<<<<<<< HEAD
                <a id="forget-password" class="" href="javascript:;">Don't have and account?<a href="<?php echo base_url("index.php/users/register")?>">Register</a></a>
            </div>
        </div>
    </div>
     <div id="footer">
       2013 &copy; <a href ="<?php echo base_url() ?>">Manage My Stocks</a>
   </div>
=======
                <a id="forget-password" class="" href="javascript:;">Forgot Password?</a>
            </div>
        </div>
    </div>
>>>>>>> 9ea66badcafd97a4fd74d1f6b8c83aba999c23dc
</body>
<!-- END BODY -->
</html>