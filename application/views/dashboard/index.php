<!DOCTYPE html>

<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
   <meta charset="utf-8" />
   <title>User Dashboard | Manage My Stocks</title>
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
                               <li><a href="logout"><i class="icon-key"></i> Log Out</a></li>
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

         <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
         <div class="navbar-inverse">
            <form class="navbar-search visible-phone">
               <input type="text" class="search-query" placeholder="Search" />
            </form>
         </div>
         <!-- END RESPONSIVE QUICK SEARCH FORM -->
         <!-- BEGIN SIDEBAR MENU -->
         <ul class="sidebar-menu">
              <li  class="active">
                  <a class="" href="<?php $this->load->helper('url') ;echo base_url("index.php/users/dashboard"); ?>">
                      <span>Dashboard</span>
                  </a>
              </li>
              <li>
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
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE -->  
      <div id="main-content">
         <!-- BEGIN PAGE CONTAINER-->
         <div class="container-fluid">
            <!-- BEGIN PAGE HEADER-->   
            <div class="row-fluid">
               <div class="span12">
                   <!-- BEGIN PAGE TITLE & BREADCRUMB-->
                   <h3 class="page-title">
                     Dashboard
                   </h3>
                   <ul class="breadcrumb">
                       <li class="active">
                           Stocks that you hold shares : Market State :<?php 
                           date_default_timezone_set('Africa/Nairobi');
                           $date = date('m/d/Y h:i:s a', time());
                           echo $date; ?>
                       </li>
                       <li class="pull-right search-wrap">
                           <form action="http://thevectorlab.net/metrolab/search_result.html" class="hidden-phone">
                               <div class="input-append search-input-area">
                                   <input class="" id="appendedInputButton" type="text">
                                   <button class="btn" type="button"><i class="icon-search"></i> </button>
                               </div>
                           </form>
                       </li>
                   </ul>
                   <!-- END PAGE TITLE & BREADCRUMB-->
               </div>
            </div>
            <!-- END PAGE HEADER-->
            <!-- BEGIN PAGE CONTENT-->
            <?php 

           $n = 0;
           while($n < count($mystocks)){
           	
           	$stock  = $mystocks[$n]['stock'] ;
           	 
             $v = 0 ;
           	for($i=0 ;$i<count($stocks);$i++){
        
           		if((strcmp(trim($stock),trim($stocks[$i])))==0){
           			
					$ind[$n] = $v;           			
   				 }
                $v++;
           	} 
           	$n++;
	}

	$k = 0;
	while($k < count($ind)){
		$n = $ind[$k] ;
?>
<div class="row-fluid">
           
		         <div class="metro-nav">
                    <div class="metro-nav-block nav-light-blue double">
                        <a data-original-title="" href="#">
                               <div class="info"><?php echo $stocks[$n] ?> </div>
                            <div class="status">Stock</div>
                        </a>
                    </div>
                     <div class="metro-nav-block nav-block-grey ">
                        <a data-original-title="" href="#">
                            <div class="info"><?php echo $yesterday[$n] ?></div>
                            <div class="status">Yesterday</div>
                        </a>
                    </div>
                     <div class="metro-nav-block nav-block-grey ">
                        <a data-original-title="" href="#">
                            <div class="info"><?php echo $today[$n] ?></div>
                            <div class="status">Today</div>
                        </a>
                    </div>
                    <div class="metro-nav-block nav-block-grey ">
                        <a data-original-title="" href="#">
                            <div class="info"><?php echo $high[$n] ?></div>
                            <div class="status">High</div>
                        </a>
                    </div>
                     <div class="metro-nav-block nav-block-grey ">
                        <a data-original-title="" href="#">
                            <div class="info"><?php echo $low[$n] ?></div>
                            <div class="status">Low</div>
                        </a>
                    </div>
            
</div>
</div>

                    <?php
   $k++;
	}
	?>
        

               <div class="space10"></div>
                <!--END METRO STATES-->
            </div>
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
   <div id="footer">
       2013 &copy; <a href ="<?php echo base_url() ?>">Manage My Stocks</a>
   </div>
   <!-- END FOOTER -->

   <!-- BEGIN JAVASCRIPTS -->
   <!-- Load javascripts at bottom, this will reduce page load time -->
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

   <!-- END JAVASCRIPTS -->   
</body>
<!-- END BODY -->
</html>