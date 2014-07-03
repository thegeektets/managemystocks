<!DOCTYPE html>

<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<?php error_reporting(0) ;
$p = 0;
//create a new array
while($p < sizeof($mystocks)){

$stock[$p] =$mystocks[$p]['stock'] ;
$date[$p] = $mystocks[$p]['date'] ;
$value[$p] = $mystocks[$p]['value'] ;
$shares[$p] =  $mystocks[$p]['shares'] ;
$p++;
}

?>



?>
<head>`
   <meta charset="utf-8" />
   <title>Your Stock Settings|Track Your Shares</title>
   <meta content="width=device-width, initial-scale=1.0" name="viewport" />
   <meta content="" name="description" />
   <link href="<?php $this->load->helper('url'); echo base_url("assets/dashboard/assets/bootstrap/css/bootstrap.min.css")?>" rel="stylesheet" />
   <link href="<?php echo base_url("assets/dashboard/assets/bootstrap/css/bootstrap-responsive.min.css")?>" rel="stylesheet" />
   <link href="<?php echo base_url("assets/dashboard/assets/bootstrap/css/bootstrap-fileupload.css")?>" rel="stylesheet" />
   <link href="<?php echo base_url("assets/dashboard/assets/font-awesome/css/font-awesome.css")?>" rel="stylesheet" />
   <link href="<?php echo base_url("assets/dashboard/css/style.css")?>" rel="stylesheet" />
   <link href="<?php echo base_url("assets/dashboard/css/style-responsive.css")?>" rel="stylesheet" />
   <link href="<?php echo base_url("assets/dashboard/css/style-default.css")?>" rel="stylesheet" id="style_color" />
   <link href="<?php echo base_url("assets/dashboard/assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css")?>" rel="stylesheet" />
   <link href="<?php echo base_url("assets/dashboard/assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css")?>" rel="stylesheet" type="text/css" media="screen"/>
 <link rel="shortcut icon" href="<?php echo base_url("assets/blue/images/favicon.ico")?>">
   
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
                   <div  data-placement="right" data-original-title="Toggle Navigation"></div>
               </div>
               <!--END SIDEBAR TOGGLE-->
               
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
                               <img src="<?php echo base_url("assets/dashboard/img/avatar.png")?>" alt="">
                               <span class="username"><?php 
                                echo $profile[0]['fullname'];?>
                               </span>
                               <b class="caret"></b>
                           </a>
                           <ul class="dropdown-menu extended logout">
                               <li><a href="<?php $this->load->helper('url'); echo base_url("index.php/users/logout");?>">
                             Logout</a></li>
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
                      <span>View Your Stocks</span>
                  </a>
              </li>
              <li>
                  <a class="" href="<?php $this->load->helper('url') ;echo base_url("index.php/users/allstocks"); ?>">
                      <span>View All Stocks</span>
                  </a>
              </li>
              <li class="active">
                  <a class="active" href="<?php echo base_url("index.php/users/addstock"); ?>">
                    <span>Your Stocks Settings</span>
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
                     Your Stock Settings
                   </h3>
          </div>
          
          <div class="span12">
                      	<ul id="myTab" class="nav nav-tabs" data-tabs="tabs">
                      	<li class = "active">
                      	<a data-toggle="tab" href="#add_stock">New Stocks</a>
                      	</li>
                         <li>
                      	<a data-toggle="tab" href="#edit">Edit Stocks</a>
                      	</li>
                      	<li>
                      	<a data-toggle="tab" href="#delete">Delete Stocks</a>
                      	</li>
                      	</ul>
                      	
                      	
			  <div id="my-tab-content" class="tab-content">
			  <div id="add_stock" class="tab-pane active">
                               <p style = "width : 50%"> Track Your Shares requires information about shares that you own 
                               in order to help us help you track and manage your profits in the stocks market.
                               This information is confidential and will not be shared or used otherwise.</p>
                              <div id = "savenewstockmessage"></div>
                              <form id = "newstockform" name = "newstockform" onsubmit = "return savenewstock()"> 

                                <div class="control-group">
                                   
                               
                                    <label class="control-label">Stock Name</label>
                                    <div class="controls">
                                        <select name="stock" type="text" placeholder="company name" class="input-xxlarge">
                                        <?php $n =0 ;
                                        while($n<count($stocks)){
                                          ?><option value="<?php echo $stocks[$n]?>"><?php echo $stocks[$n]?></option>
                                          <?
                                          $n++;
                                        }?>
                                        </select>
                                    </div>
                                </div>
                                  <div class="control-group">
                                    <label class="control-label">Date</label>
                                    <div class="controls">
                                     <input type="date" placeholder="" id="date" class="input-xxlarge" name ="date" value=""/>
                                   </div>
                                </div>
                                 <div class="control-group">
                                    <label class="control-label">Number of Shares</label>
                                    <div class="controls">
                                    <input type="text" placeholder="" id="no_shares" class="input-xxlarge" name ="shares" value=""/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Value per Share</label>
                                    <div class="controls">
                                        <input type="text" placeholder="" id="value" class="input-xxlarge" name ="value" value=""/>
                                     </div>
                                </div>
                               

                                <div class="form-actions">
                                    <button type="submit" class="btn-primary">Add New Stock</button>
                                </div>
                            </form>
                            <!-- END FORM-->
                      </div>
                  
                  <!-- end add -->
                   <div id="edit" class="tab-pane">
                              
                              <div id = "editstockmessage"></div>
                              <form id = "editstockform" name = "editstockform" onsubmit = "return editstock()"> 

                                <div class="control-group">
                                   
                               
                                    <label class="control-label">Stock Name</label>
                                    <div class="controls">
                                       <select name="stock" type="text" placeholder="company name" class="input-xxlarge" onchange = "populateeditform()">
                                        <?php $n =0 ;
                                        
                                        while($n<count($mystocks)){
                                          ?><option value="<?php echo $mystocks[$n]['stock']?>"><?php echo $mystocks[$n]['stock']?></option>
                                          <?
                                          $n++;
                                        }?>
                                        </select>
                                       </div>
                                    
                                </div>
                                  <div class="control-group">
                                    <label class="control-label">Date</label>
                                    <div class="controls">
                                     <input type="date" placeholder="" id="date" class="input-xxlarge" name ="date" value=""/>
                                   </div>
                                </div>
                                 <div class="control-group">
                                    <label class="control-label">Number of Shares</label>
                                    <div class="controls">
                                    <input type="text" placeholder="" id="no_shares" class="input-xxlarge" name ="shares" value=""/>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label">Value per Share</label>
                                    <div class="controls">
                                        <input type="text" placeholder="" id="value" class="input-xxlarge" name ="value" value=""/>
                                     </div>
                                </div>
                               

                                <div class="form-actions">
                                    <button type="submit" class="btn-primary">Edit Stock Details</button>
                                </div>
                            </form>
                            <!-- END FORM-->
                      </div>
                  
                  <!-- end add -->
                  <div id="delete" class="tab-pane">
                 
                   <form id = "deletestockform" name = "deletestockform" onsubmit="return deletestock()">
                                <div id = "deletestockmessage"></div>
         
                                <div class="control-group">
                                    <label class="control-label">Stock Name</label>
                                    <div class="controls">
                  <select name="stock" type="text" placeholder="company name" class="input-xxlarge" onchange= "populatedeleteform()">
                                        <?php $n =0 ;
                                        
                                        while($n<count($mystocks)){
                                          ?><option value="<?php echo $mystocks[$n]['stock']?>"><?php echo $mystocks[$n]['stock']?></option>
                                          <?
                                          $n++;
                                        }?>
                                        </select>
                                       </div>
                                        <div class="control-group">
                                    <label class="control-label">Date</label>
                                    <div class="controls">
                                     <input type="date" placeholder="" id="date" class="input-xxlarge" name ="date" value=""/>
                                   </div>
                                </div>
                                         <div class="form-actions">
                                    <button type="submit" class="btn-danger">Delete Stock</button>
                                     </div>
                            </form>
                  </div>
                   </div>
                  </div>
                  <div id="edit" class="tab-pane fade">
                  <p>
                  Edit stock here
                  </p>
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
<div id="footer">
       2013 - <?php echo date("Y"); ?> &copy; <a href ="<?php echo base_url() ?>">Track Your Shares</a>
   </div>

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
   <script type="text/javascript">
    $(document).ready(function() {
    	$('#no_shares').val('');
    	$('#shvalue').val('');
    });
   </script>
    <script type="text/javascript">
				jQuery(document).ready(function ($) {
				$('#tabs').tab();


				});
  
   function savenewstock(){
        $.ajax({
    type: 'post',
    url:'<?php echo base_url("/index.php/users/savestock")?>',
    data:$('#newstockform').serialize(),
    success:
      function(data){
        if (data == '1'){
           $('#savenewstockmessage').attr("class" ,"alert alert-success alert-white-alt rounded");
           $('#savenewstockmessage').append("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>");
           $('#savenewstockmessage').append("<div class='icon'><i class='fa fa-check'></i></div>");
           $('#savenewstockmessage').append("<strong>Success!</strong> new stock shares added!"); 
          
        }
        else if(data == '2'){
          
           $('#savenewstockmessage').attr("class" ,"alert alert-danger alert-white-alt rounded");
           $('#savenewstockmessage').append("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>");
           $('#savenewstockmessage').append("<div class='icon'><i class='fa fa-warning'></i></div>");
           $('#savenewstockmessage').append("<strong>Error!</strong> record already exists"); 
        }
         
        else{
          
           $('#savenewstockmessage').attr("class" ,"alert alert-danger alert-white-alt rounded");
           $('#savenewstockmessage').append("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>");
           $('#savenewstockmessage').append("<div class='icon'><i class='fa fa-warning'></i></div>");
           $('#savenewstockmessage').append("<strong>Error!</strong >failed to add stock shares possible validation error"); 
        }
      },
    fail:
      function(data){
        console.log(data);
      }

  });
  
  return false;
 

     }
     function deletestock(){
        $.ajax({
    type: 'post',
    url:'<?php echo base_url("/index.php/users/deletestock")?>',
    data:$('#deletestockform').serialize(),
    success:
      function(data){
        if (data == '1'){
           $('#deletestockmessage').attr("class" ,"alert alert-success alert-white-alt rounded");
           $('#deletestockmessage').append("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>");
           $('#deletestockmessage').append("<div class='icon'><i class='fa fa-check'></i></div>");
           $('#deletestockmessage').append("Delete operation success!"); 
          
        }
         
        else{
          
           $('#deletestockmessage').attr("class" ,"alert alert-danger alert-white-alt rounded");
           $('#deletestockmessage').append("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>");
           $('#deletestockmessage').append("<div class='icon'><i class='fa fa-warning'></i></div>");
           $('#deletestockmessage').append("<strong>Error!</strong >failed to add stock shares possible validation error"); 
        }
      },
    fail:
      function(data){
        console.log(data);
      }

  });
  
  return false;
 

     }
       function editstock(){
        $.ajax({
    type: 'post',
    url:'<?php echo base_url("/index.php/users/editstock")?>',
    data:$('#editstockform').serialize(),
    success:
      function(data){
        if (data == '0'){
          $('#editstockmessage').attr("class" ,"alert alert-danger alert-white-alt rounded");
           $('#editstockmessage').append("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>");
           $('#editstockmessage').append("<div class='icon'><i class='fa fa-warning'></i></div>");
           $('#editstockmessage').append("<strong>Error!</strong > failed to edit stock shares possible validation error"); 
     
          
        }
         
        else{
                    $('#editstockmessage').attr("class" ,"alert alert-success alert-white-alt rounded");
           $('#editstockmessage').append("<button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>");
           $('#editstockmessage').append("<div class='icon'><i class='fa fa-check'></i></div>");
           $('#editstockmessage').append("Edit operation success!"); 
    
          
               }
      },
    fail:
      function(data){
        console.log(data);
      }

  });
  
  return false;
 

     }
     function populatedeleteform(){
            var s=document.deletestockform.stock.selectedIndex;
            var selected  =document.deletestockform.stock.options[s].value;
            var stocks =<?php echo json_encode($stock);?>;
            var date=<?php echo json_encode($date);?>;
                          
    for(var i=0;i<stocks.length;i++){
      if(selected==stocks[i].replace(/[\[\]']+/g,'').replace(/['"]/g,'')){
        document.deletestockform.date.value=date[i].replace(/[\[\]']+/g,'').replace(/['"]/g,'');
         }
        
    }
    return false;
    }
   function populateeditform(){
            var s=document.editstockform.stock.selectedIndex;
            var selected  =document.editstockform.stock.options[s].value;
            var stocks =<?php echo json_encode($stock);?>;
            var value=<?php echo json_encode($value);?>;
            var shares=<?php echo json_encode($shares);?>;
            var date=<?php echo json_encode($date);?>;
                          
 for(var i=0;i<stocks.length;i++){
      if(selected==stocks[i].replace(/[\[\]']+/g,'').replace(/['"]/g,'')){
        document.editstockform.value.value=value[i].replace(/[\[\]']+/g,'').replace(/['"]/g,'');
        document.editstockform.shares.value=shares[i].replace(/[\[\]']+/g,'').replace(/['"]/g,'');
        document.editstockform.date.value=date[i].replace(/[\[\]']+/g,'').replace(/['"]/g,'');
         }
        
    }
    return false;
    }




  </script> 
  

  

</body>
<!-- END BODY -->
</html>