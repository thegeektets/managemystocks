<!DOCTYPE html>

<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
   <meta charset="utf-8" />
   <title>My Stocks | Manage My Stocks</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <meta content="Mosaddek" name="author" />
   <link href="<?php $this->load->helper('url'); echo base_url("assets/dashboard/assets/bootstrap/css/bootstrap.min.css")?>" rel="stylesheet" />
   <link href="<?php echo base_url("assets/dashboard/assets/bootstrap/css/bootstrap-responsive.min.css")?>" rel="stylesheet" />
   <link href="<?php echo base_url("assets/dashboard/assets/bootstrap/css/bootstrap-fileupload.css")?>" rel="stylesheet" />
   <link href="<?php echo base_url("assets/dashboard/assets/font-awesome/css/font-awesome.css")?>" rel="stylesheet" />
   <link href="<?php echo base_url("assets/dashboard/css/style.css")?>" rel="stylesheet" />
   <link href="<?php echo base_url("assets/dashboard/css/style-responsive.css")?>" rel="stylesheet" />
   <link href="<?php echo base_url("assets/dashboard/css/style-default.css")?>" rel="stylesheet" id="style_color" />
   <link href="<?php echo base_url("assets/dashboard/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css")?>" rel="stylesheet" />
   <link href="<?php echo base_url("assets/dashboard/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css")?>" rel="stylesheet" type="text/css" media="screen"/>
</head>
<!-- END HEAD -->
<!-- BEGIN BODY -->
<body class="fixed-top">
   <!-- BEGIN HEADER -->
   <div id="header" class="navbar navbar-inverse navbar-fixed-top">
       <!-- BEGIN TOP NAVIGATION BAR -->
       <div class="navbar-inner">
           <div class="container-fluid">
               <!--BEGIN SIDEBAR TOGGLE-->
               <div class="sidebar-toggle-box hidden-phone">
                   <div class="icon-reorder tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
               </div>
               <!--END SIDEBAR TOGGLE-->
               <!-- BEGIN LOGO -->
               <a class="brand" href="#">
                   <img src="" alt="Dashboard" />
               </a>
               <!-- END LOGO -->
               <!-- BEGIN RESPONSIVE MENU TOGGLER -->
               <a class="btn btn-navbar collapsed" id="main_menu_trigger" data-toggle="collapse" data-target=".nav-collapse">
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="arrow"></span>
               </a>
               <!-- END RESPONSIVE MENU TOGGLER -->
               <div id="top_menu" class="nav notify-row">
                   <!-- BEGIN NOTIFICATION -->
                   <ul class="nav top-menu">
                       <!-- BEGIN SETTINGS -->
              
                   </ul>
               </div>
               <!-- END  NOTIFICATION -->
               <div class="top-nav ">
                   <ul class="nav pull-right top-menu" >
                       <li class="dropdown">
                           <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                               <img src="img/avatar.png" alt="">
                               <span class="username"><?php error_reporting(0); echo $profile[0]['fullname'];?>
                               </span>
                               <b class="caret"></b>
                           </a>
                           <ul class="dropdown-menu extended logout">
                               <li><a href="#"><i class="icon-user"></i> My Profile</a></li>
                               <li><a href="#"><i class="icon-cog"></i> My Settings</a></li>
                               <li><a href="login.html"><i class="icon-key"></i> Log Out</a></li>
                           </ul>
                       </li>
                       <!-- END USER LOGIN DROPDOWN -->
                   </ul>
                   <!-- END TOP NAVIGATION MENU -->
               </div>
           </div>
       </div>
       <!-- END TOP NAVIGATION BAR -->
   </div>
   <!-- END HEADER -->
   <!-- BEGIN CONTAINER -->
   <div id="container" class="row-fluid">
      <!-- BEGIN SIDEBAR -->
      <div class="sidebar-scroll">
        <div id="sidebar" class="nav-collapse collapse">

         <!-- BEGIN SIDEBAR MENU -->
          <ul class="sidebar-menu">
              <li class="sub-menu ">
                  <a class="" href="<?php $this->load->helper('url') ;echo base_url("index.php/users/dashboard"); ?>">
                      <span>Dashboard</span>
                  </a>
              </li>
              <li class="active">
                  <a class="active" href="<?php echo base_url("index.php/users/addstock"); ?>">
                    <span>My Stocks</span>
                  </a>
              </li>
      
              <li>
                  <a class="" href="<?php echo base_url("index.php/users/logout"); ?>">
                    <span>Logout</span>
                  </a>
              </li>
          </ul>
         <!-- END SIDEBAR MENU -->
      </div>
      </div>
<div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->
                   <h3 class="page-title">
                     My Stocks  | Add Shares you own ...
                   </h3>
                   <h2><?php echo $success ?></h2>
            <h3><?php echo form_error('shares') . form_error('values');  ?></h3>
    
                   <!-- END PAGE TITLE & BREADCRUMB-->
          </div>
          
           <div class="row-fluid">
                <div class="span12">
                    <!-- BEGIN SAMPLE FORMPORTLET-->
                    <div class="widget gray">
                        <div class="widget-title">
                            <span class="tools">
                            <a href="javascript:;" class="icon-chevron-down"></a>
                            <a href="javascript:;" class="icon-remove"></a>
                            </span>
                        </div>
                        <div class="widget-body">
                            <!-- BEGIN FORM-->
                              <form <?php echo form_open('users/addstock'); ?> 
         
                                <div class="control-group">
                                    <label class="control-label">Stock Name</label>
                                    <div class="controls">
<<<<<<< HEAD
                                        <select name="stock" type="text" placeholder="stock" class="input-xxlarge">
                                        <?php $n =0 ;
                                        while($n<count($stocks)){
                                          ?><option value="<?php echo $stocks[$n]?>"><?php echo $stocks[$n]?></option>
                                          <?
                                          $n++;
                                        }?>
                                        </select>
                                         <span class="help-inline"><?php echo form_error('stock') ; ?></span>
=======
                                        <input type="text" placeholder="stock" class="input-xxlarge"  name ="stock" value="<?php echo set_value('stock'); ?>"/>
                                        <span class="help-inline"><?php echo form_error('stock') ; ?></span>
>>>>>>> 9ea66badcafd97a4fd74d1f6b8c83aba999c23dc
                                    </div>
                                </div>
                                 <div class="control-group">
                                    <label class="control-label">Shares</label>
                                    <div class="controls">
                                        <input type="text" placeholder="shares" class="input-xxlarge" name ="shares" value="<?php echo set_value('shares'); ?>"/>
                                        <span class="help-inline"><?php echo form_error('shares') ; ?></span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Value</label>
                                    <div class="controls">
                                        <input type="text" placeholder="values" class="input-xxlarge" name ="value" value="<?php echo set_value('value'); ?>"/>
                                        <span class="help-inline"><?php echo form_error('value');  ?></span>
                                    </div>
                                </div>
                               

                                <div class="form-actions">
                                    <button type="submit" class="btn success">Add Stock</button>
                                    <button type="button" class="btn"><i class=" icon-remove"></i> Cancel</button>
                                </div>
                            </form>
                            <!-- END FORM-->
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->
                </div>
            </div>
                        </div>
                    </div>
                    <!-- END SAMPLE FORM PORTLET-->
                </div>
            </div>

            <!-- END PAGE CONTENT-->
         </div>
         <!-- END PAGE CONTAINER-->
      </div>
      <!-- END PAGE -->
   </div>
   <!-- END CONTAINER -->

   <!-- BEGIN FOOTER -->
                            <!-- END FORM-->
                   

      <script src="<?php echo base_url("assets/dashboard/js/jquery-1.8.3.min.js")?>"></script>
   <script src="<?php echo base_url("assets/dashboard/js/jquery.nicescroll.js")?>" type="text/javascript"></script>
   <script type="text/javascript" src="<?php echo base_url("assets/dashboard/assets/jquery-slimscroll/jquery-ui-1.9.2.custom.min.js")?>"></script>
   <script type="text/javascript" src="<?php echo base_url("assets/dashboard/assets/jquery-slimscroll/jquery.slimscroll.min.js")?>"></script>
   <script src="<?php echo base_url("assets/dashboard/assets/fullcalendar/fullcalendar/fullcalendar.min.js")?>"></script>
   <script src="<?php echo base_url("assets/dashboard/assets/bootstrap/js/bootstrap.min.js")?>"></script>

   <!-- ie8 fixes -->
   <!--[if lt IE 9]>
   <script src="<?php echo base_url("assets/dashboard/js/excanvas.js")?>"></script>
   <script src="<?php echo base_url("assets/dashboard/js/respond.js")?>"></script>
   <![endif]-->

   <script src="<?php echo base_url("assets/dashboard/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js")?>" type="text/javascript"></script>
   <script src="<?php echo base_url("assets/dashboard/js/jquery.sparkline.js")?>" type="text/javascript"></script>
   <script src="<?php echo base_url("assets/dashboard/assets/chart-master/Chart.js")?>"></script>
   <script src="<?php echo base_url("assets/dashboard/js/jquery.scrollTo.min.js")?>"></script>


   <!--common script for all pages-->
   <script src="<?php echo base_url("assets/dashboard/js/common-scripts.js")?>"></script>

   <!--script for this page only-->

   <script src="<?php echo base_url("assets/dashboard/js/easy-pie-chart.js")?>"></script>
   <script src="<?php echo base_url("assets/dashboard/js/sparkline-chart.js")?>"></script>
   <script src="<?php echo base_url("assets/dashboard/js/home-page-calender.js")?>"></script>
   <script src="<?php echo base_url("assets/dashboard/js/home-chartjs.js")?>"></script>

</body>
<!-- END BODY -->
</html>