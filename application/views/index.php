<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<?php $this->load->helper('url');?>

<?php error_reporting(0);  ?>
<head>

    <title>Track Your Shares |Simple.Stock.Manager</title>

        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSS -->

    <link rel="stylesheet" href="<?php echo base_url("assets/blue/css/reset.css")?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/blue/css/font-awesome.css")?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/blue/css/flexslider.css")?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/blue/css/popup.css")?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/blue/css/responsive.css")?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/blue/css/style.css")?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/blue/css/lite.css")?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/blue/css/bootstrap.min.css")?>">
     <link rel="stylesheet" href="<?php echo base_url("assets/blue/css/metro-style.css")?>">
    <link rel="stylesheet" href="<?php echo base_url("assets/blue/css/Met-Js.css")?>">
    <link rel="shortcut icon" href="<?php echo base_url("assets/blue/images/favicon.ico")?>">
    

    <!-- Js -->

    <script src="<?php echo base_url("assets/blue/js/jquery.min.js")?>"></script>
    <script src="<?php echo base_url("assets/blue/js/SmoothScroll.js")?>"></script>
    <script src="<?php echo base_url("assets/blue/js/modernizr.js")?>"></script>
    <script src="<?php echo base_url("assets/blue/js/device.min.js")?>"></script>
    <script type="text/javascript">  
    $(window).load(function(){  
         $("#loading").hide();  
    })  
    </script>
    <script src="<?php echo base_url("assets/blue/js/jquery.mb.YTPlayer.js")?>"></script>
    <script src="<?php echo base_url("assets/blue/js/jquery.flexslider-min.js")?>"></script>
    <script src="<?php echo base_url("assets/blue/js/jquery.parallax.min.js")?>"></script>
    <script src="<?php echo base_url("assets/blue/js/jquery.scrollTo.min.js")?>"></script>
    <script src="<?php echo base_url("assets/blue/js/waypoints.min.js")?>"></script>
    <script src="<?php echo base_url("assets/blue/js/jquery.magnific-popup.min.js")?>"></script>
    <script src="<?php echo base_url("assets/blue/js/jquery.custom.js")?>"></script>
    <script src="<?php echo base_url("assets/blue/js/lib/jquery.fittext.js")?>"></script>
    <script src="<?php echo base_url("assets/blue/js/lib/jquery.superslides.min.js")?>"></script>
    <script src="<?php echo base_url("assets/blue/js/lib/jquery.sudoslider.min.js")?>"></script>
    <script src="<?php echo base_url("assets/blue/js/main.js")?>"></script>
    <script src="<?php echo base_url("assets/blue/js/lib/jquery.min.js")?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/blue/js/MetroJs.js")?>"></script>
    <script type="text/javascript" src="<?php echo base_url("assets/blue/js/custom.metro.js")?>"></script>
    <script type ="text/javascript">
     function registeruser(){
         $.ajax({

               type :"post",
                url:'http://trackyourshares.com/index.php/users/register',
                data:$("#register").serialize(),
                
               success : 
                     function(data){
                     if(data == 1) {
                     $('.success').text('Registration success').css('color','green');
                      }
                      else if(data == 3){
                     $('.success').text('Registration Error username already exists').css('color','red');
                     }
                      else{
                     $('.success').text('Registration Error : there was an error in your registration details').css('color','red');
                     }
                     

                     
                      },
                     
               error :
                      function(data){
                     $('.success').text('server error').css('color','red');
               
                     }
               });
              
      return false;
                  
     }
    </script>
</head>


<body id="mainsite">

 <div id="loading"></div> 
<a id="top"></a>
    



    <!-- HEADER -->

    <header id="header-section" class="ha-header ha-header-hide">
        <div class="grid-container">
                <div class="ha-header-perspective">
                    <div class="ha-header-front">
                    <div class="grid-20 tablet-grid-20 hide-on-mobile">
                        <h1 class="logo"><a href="#top"><img src="<?php echo base_url("assets/blue/images/logo.png")?>" alt="logo"></a></h1>
                        </div>
                        <nav id="ut-navigation" class="grid-80 tablet-grid-80 hide-on-mobile">
                            <a class="selected" href="#top">Home</a>
                            <a href="#about-section">About</a>
                            <a href="#team-section">Team</a>
                            <a href="#service-section">Register</a>
                            <a href="#service-section">Login</a>
                            <a href="#connect-section">Contact</a>
                           
                        </nav>
                    </div>
                </div>
        </div>
    </header>
    
    <div class="clear"></div>
    
    <section class="hero ha-waypoint parallax-section parallax-banner-1" data-animate-up="ha-header-hide" data-animate-down="ha-header-hide">
       
         <div class="grid-container">
            
        <section class="welcome clearfix">
        
        <header class="containerx">

        <div id="MainHeader" class="parallax"></div>
        <div class="units-row units-row-end topslider">

    <div id="home-items">
    <div id="block-left">

            <div class="tiles">


            <div class="live-tile" id="bick1"  data-mode="flip"  data-delay="11500" data-direction="vertical" >

                <div class="navi-main">
                    <h1>Track Your Stocks</h1>
                    <h3>Simple.Stock.Manager</h3>
                </div>
                <div class="navi-main">
                    <h1>Real Time Updates</h1>
                    <h3>Register.Login.Add Info.Updates</h3>
                </div>
            </div>
            </div>
            
            <div class="live-tile" id="bick-m"   data-mode=""  data-delay="" data-direction="" >
                <div class="navi-sq-m">
                    <img src="<?php echo base_url("assets/blue/images/log.png")?>" alt="" >
                    <h1>Manage My Stock</h1>
                </div>
            </div>

            <div class="live-tile" id="bick2"   data-mode=""  data-delay="" data-direction="" >
                <div class="navi-sq-1"><a href="#team-section">
                    <img src="<?php echo base_url("assets/yellow/images/head/team.png")?>" alt="" >
                    <h1>Team</h1></a>
                </div>
            </div>
            

            <div class="live-tile" id="bick3"  data-mode="carousel"  data-delay="14000" data-direction="horizontal" >

                    <div><img src="<?php echo base_url("assets/yellow/images/head/2.png")?>" alt="" ></div>
                    <div><img src="<?php echo base_url("assets/yellow/images/head/1.png")?>" alt="" ></div>
            </div>

            <div class="live-tile" id="bicks-1"  data-mode="carousel"  data-delay="9000" data-direction="vertical" >

            </div>
            <div class="live-tile" id="bick4"  data-mode=""  data-delay="" data-direction="" >
                <div class="navi-sq-2"><a href="#service-section">
                    <img src="<?php echo base_url("assets/yellow/images/head/service.png")?>" alt="" >
                    <h1>Register</h1></a>                                  
                </div>
            </div>
            <div class="live-tile" id="bick5"  data-mode=""  data-delay="" data-direction="" >
                <div class="navi-sq-3"><a href="#service-section">
                    <img src="<?php echo base_url("assets/yellow/images/head/folio.png")?>" alt="" >
                    <h1>Login</h1></a>                            
                </div>
            </div>

            <div class="live-tile" id="bick6"  data-mode="flip"  data-delay="17000" data-direction="vertical" >

                    <div><img src="<?php echo base_url("assets/yellow/images/head/3.png")?>" alt="" ></div>
                    <div><img src="<?php echo base_url("assets/yellow/images/head/4.png")?>" alt="" ></div>
            </div>


            <div class="live-tile" id="bick7"  data-mode="flip"  data-delay="22000" data-direction="vertical" >


                    <div><img src="<?php echo base_url("assets/yellow/images/head/5.png")?>" alt="" ></div>
                    <div><img src="<?php echo base_url("assets/yellow/images/head/6.png")?>" alt="" ></div>
            </div>
            <div class="live-tile" id="bick8"  data-mode=""  data-delay="" data-direction="" >
                            
                <div class="navi-sq-4">
                    <a href="#about-section">
                    <img src="<?php echo base_url("assets/yellow/images/head/about.png")?>" alt="" >
                    <h1>About</h1></a>                      
                </div>  
            </div>

            <div class="live-tile" id="bick9"  data-mode="flip"  data-delay="26000" data-direction="vertical" >


                    <div><img src="<?php echo base_url("assets/yellow/images/head/7.png")?>" alt="" ></div>
                    <div><img src="<?php echo base_url("assets/yellow/images/head/8.png")?>" alt="" ></div>
            </div>

            <div class="live-tile" id="bicks-2"  data-mode="carousel"  data-delay="18000" data-direction="vertical">

            </div>
    
            <div class="live-tile" id="bick10"  data-mode="flip"  data-delay="16000" data-direction="vertical" >

                    <div><img src="<?php echo base_url("assets/yellow/images/head/9.png")?>" alt="" ></div>
                    <div><img src="<?php echo base_url("assets/yellow/images/head/10.png")?>" alt="" ></div>
            </div>
            <div class="live-tile" id="bick11"  data-mode=""  data-delay="" data-direction="" >
                <div class="navi-sq-5"><a href="#contact-section">
                    <img src="<?php echo base_url("assets/yellow/images/head/contact.png")?>" alt="" >
                    <h1>Contact</h1></a>                            
                </div>

            </div>
            <div class="live-tile" id="bicks-3"  data-mode="carousel"  data-delay="18000" data-direction="vertical" >

            </div>
            <div class="live-tile" id="bick12"  data-mode="flip"  data-delay="8500" data-direction="vertical" >

                    <div><img src="<?php echo base_url("assets/yellow/images/head/12.png")?>" alt="" ></div>
                    <div><img src="<?php echo base_url("assets/yellow/images/head/11.png")?>" alt="" ></div>
            </div>

            <div class="live-tile" id="bick13"   data-mode=""  data-delay="" data-direction="" >
                <div class="navi-sq-t"><a href="#about-section">
                    <img src="<?php echo base_url("assets/yellow/images/down.png")?>" alt="" ></a>
                </div>
            </div>
           </div>   
        </div>
        </div>

        </header>
        </section>

        </div>
        </section>

    <!-- /HEADER -->




    <!-- ABOUT -->
    
    <section class="ha-waypoint" data-animate-up="ha-header-hide" data-animate-down="ha-header-small"></section><br>

    <div class="clear"></div>
   
    <div id="main-content" class="wrap">
    
    <div class="nav-waypoint">

    <section id="about-section" class="about-section content-section ha-waypoint">
           <div class="grid-container">
            
            
            <div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">
                <header class="section-header">
                    <h2 class="section-title"><span>ABOUT</span></h2>
                    <p class="section-slogan"><strong>Track Your Shares</strong> is an application that will enable you to keep track of shares you are interested in on the NSE (Nairobi Securities Exchange).</p>
                </header>
            </div>
            
            

            
            <div class="grid-50 tablet-grid-100 mobile-grid-100 about-box">
                <figure class="about-icon-r"><img src="<?php echo base_url("assets/yellow/images/icon-3.png")?>" alt="brand-identity"></figure>
                
                <div class="about-box-r">
                    <h3><strong>Visit Our Site</strong></h3>
                    <p>Welcome to the pioneer application in providing specialised NSE updates</p>
                </div>
            </div>
            
            <div class="grid-50 tablet-grid-100 mobile-grid-100 about-box">
                <figure class="about-icon"><img src="<?php echo base_url("assets/yellow/images/icon-4.png")?>" alt="consultancy"></figure>
                
                <div class="about-box">
                    <h3><strong>Register</strong></h3>
                    <p>Register for an account in <a href="">Track Your Shares</a> today; its free </p>
                </div>
            </div>
            

            <div class="grid-50 tablet-grid-100 mobile-grid-100 about-box">
                <figure class="about-icon-r"><img src="<?php echo base_url("assets/yellow/images/icon-1.png")?>" alt="app-development"></figure>
                
                <div class="about-box-r">
                    <h3><strong>Login</strong></h3>
                    <p>Login into an already existing account</p>
                </div>
            </div>
            
            <div class="grid-50 tablet-grid-100 mobile-grid-100 about-box">
                <figure class="about-icon"><img src="<?php echo base_url("assets/yellow/images/icon-2.png")?>" alt="ui-design"></figure>
                
                <div class="about-box">
                    <h3><strong>Setup Account</strong></h3>
                    <p>Setup your personal account by adding stocks you are interested in or already have shares in</p>
                </div>
            </div>
            <div class="grid-50 tablet-grid-100 mobile-grid-100 about-box">
                <figure class="about-icon-r"><img src="<?php echo base_url("assets/yellow/images/icon-5.png")?>" alt="brand-identity"></figure>
                
                <div class="about-box-r">
                    <h3><strong>Dashboard</strong></h3>
                    <p>Access your dashboard to view realtime updates on stock data</p>
                </div>
            </div>
            
            <div class="grid-50 tablet-grid-100 mobile-grid-100 about-box">
                <figure class="about-icon"><img src="<?php echo base_url("assets/yellow/images/icon-6.png")?>" alt="consultancy"></figure>
                
                <div class="about-box">
                    <h3><strong>Updates</strong></h3>
                    <p>View updates on your selected stocks</p>
                </div>
            </div>



        </div>
    </section>
    <div class="clear"></div>

    <!-- /ABOUT -->
            



    
    
    <!-- PARALLAX -->

     <section id="parallax-section-2" class="parallax-section parallax-banner-2 parallax-background parallax-section-2 ha-waypoint">
        <div class="grid-container parallax-content">
            
                <div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">
                    <header class="parallax-header">
                        <h2 class="parallax-title"><span>Our Promise</span></h2><br>
                         <div class="hero-title-holder parallax-slogan">
                         We promise to always provide relevant, <span>Upto date </span>information on your stock market shares

                         </div>
                    </header>
                </div>
        </div>
    </section>
    
    </div>
    
    <div class="clear"></div>

    <!-- /PARALLAX -->
    
    


    <!-- TEAM -->

    <div class="nav-waypoint" >
    <section id="team-section" class="team-section content-section">
        <div class="grid-container">
            
            <div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">
                <header class="section-header">
                    <h2 class="section-title"><span>Meet Our Team</span></h2>
                    <p class="section-slogan">We are young passionate web and mobile developers, part of a larger team of technology enthusiasts known as codebots</p>
                </header>
            </div>
                    
           <div class="grid-parent grid-100 mobile-grid-100 tablet-grid-100">
          
           <div class="member-box col-md-4 col-sm-6">
                <article>
                    <div class="team-box">
                          <p class="team-title">Griffin Muteti</p>
                        <p class="job-title">Developer & Designer</br>
                         Griffin is the head of design and back-end development of Track Your Shares </p>
                        
                    </div>
                </article>  
            </div>
            <div class="member-box col-md-4 col-sm-6">
                <article>
                    <div class="team-box">
                        <p class="team-title">Denis Mageto</p>
                        <p class="job-title">Developer & Team Manager </br>
                        The Track Your Shares team Manager , Mageto leads by example </p>
                    </div>
                </article>  
            </div>
            <div class="member-box col-md-4 col-sm-6">
                <article>
                    <div class="team-box">
                        <p class="team-title">Brian Mosigisi</p>
                        <p class="job-title">Developer</br>
                             A JavaScript expert, Brian is also incharge of Graphics at Track Your Shares.
                        </p>
                    </div>
                </article>  
            </div>
            
         </div>
    </div>
    

    </div>
    </section>
   
    <!-- /TEAM -->
    


 


    <!-- REGISTER -->
<section id="service-section" class="service-section content-section ha-waypoint services">
           <div class="grid-container">

            <div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">
                <header class="section-header"><br><br><br>
                    <h2 class="section-title"><span>REGISTER | LOGIN </span></h2>
                    <p class="section-slogan">Creat your account or Login    </p>
                    <div class="success"> </div>
                    
                   
                </header>
            </div>
            
            <div class="grid-parent grid-100 mobile-grid-100 tablet-grid-100">
            <div class="contact-form-holder clearfix">
            
             
           <div  class="grid-50"> 
            <form onsubmit="return registeruser()" id="register">
            
                <ul>
                
                    <li><input  type="text" name="username" placeholder="Your Username:"></li>
                    <li><input  type="text" name="fullname" placeholder="Your Fullname:"></li>
                    
                    <li><input  type="email" name="email" placeholder="Your E-Mail:"></li>
                    <li><input  type="password" name="password" placeholder="Your Password:"></li>
                    <li><input  type="password" name="cpassword" placeholder="Confirm Password:"></li>
                     
                      
                </ul>
                    <input type="submit" value="Create Account">
                    
           </form>
           </div>

               
          
          <div  class="grid-50">  
              <?php echo form_open('users/index'); ?>   
            
                <ul>
                
                    <li><input  type="text" name="user" placeholder="Your Username:"></li>
                    <li><input  type="password" name="pass" placeholder="Your Password:"></li>
                      
                </ul>
                    <input  type="submit"  value="Login">
                
                
                    
          </form>
            </div>
     
            </div>
            </div>


           </div>
        </section>
      </div>



  <!-- contact section -->
     <section id="connect-section" class="contact-section parallax-section parallax-banner-5 parallax-background">
        <div class="grid-container parallax-content">
        
                <!-- parallax header -->
                <div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">

                    <header class="section-header">

                       <p class="section-slogan-1">support@trackyourshares.com<br><strong>: +254-701-540-318 </strong></p> 
                     </header>

                </div>
                <!-- close parallax header -->
            
            <div class="clear"></div>
            
            <!-- contact wrap -->
            <div class="grid-100 mobile-grid-100 tablet-grid-100">
            <div class="contact-wrap">
            
        
            </div>
            </div><br><br><br><!-- close contact wrap -->
            
            <!--
                <!-- social network -->
            <ul class="social-network">
                <li class="facebook grid-30 tablet-grid-30 mobile-grid-0">
                    <a class="social-link" href="#" target="_blank">
                    <span class="social-icon-e" style =  "background: rgba(0,0,0,0.7)"><i class="icon-4x"></i></span>
                    </a>
                </li>
                <li class="facebook grid-10 tablet-grid-10 mobile-grid-50">
                    <a class="social-link" href="#" target="_blank">
                    <span class="social-icon-m"><i class="icon-facebook icon-4x"></i></span>
                    </a>
                </li>
                <li class="youtube grid-10 tablet-grid-10 mobile-grid-50">
                    <a class="social-link" href="#" target="_blank">
                    <span class="social-icon-m"><i class="icon-flickr icon-4x"></i></span>
                    </a>
                </li>
                <li class="twitter grid-10 tablet-grid-10 mobile-grid-50">
                    <a class="social-link" href="#" target="_blank">
                    <span class="social-icon-m"><i class="icon-twitter icon-4x"></i></span>
                    </a>
                </li>
                <li class="google-plus grid-10 tablet-grid-10 mobile-grid-50">
                    <a class="social-link" href="#" target="_blank">
                    <span class="social-icon-m"><i class="icon-google-plus icon-4x"></i></span>
                    </a>
                </li>
                <li class="facebook grid-30 tablet-grid-30 mobile-grid-0">
                    <a class="social-link" href="#" target="_blank">
                    <span class="social-icon-e"><i class="icon-4x"></i></span>
                    </a>
                </li>
                -->

            </ul>
        </div>
    </section>
    
    <div class="clear"></div>

    <!-- ADDRESS-->




    <!-- CONTACT-->

     <div class="nav-waypoint">
    <section id="contact-section" class="about-section content-section ha-waypoint services">
           <div class="grid-container">

            <div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">
                <header class="section-header"><br><br><br>
                    <h2 class="section-title"><span>CONTACT</span></h2>
                    <p class="section-slogan">We'd Love to get in touch with you. this is a <strong>Contact Form</strong>, So why not drop us an email and we'll get back to you as soon as we can.</p>
                </header>
            </div>
            
            <div class="grid-parent grid-100 mobile-grid-100 tablet-grid-100">
            <div class="contact-form-holder clearfix">
            
            
            
            <form id="contact-form" class="contact-form">
            
                <ul class="grid-50">
                
                    <li><input id="name" class="name" type="text" name="name" placeholder="Your Name:"></li>
                    <li><input id="email" class="email" type="email" name="email" placeholder="Your E-Mail:"></li>
                    <li><input id="phone" class="phone" type="text" name="phone" placeholder="Your Phone:"></li>
                    
                </ul>
                
                <ul class="grid-50">
                    <li><textarea id="message" class="message" name="message" placeholder="Message:"></textarea></li>
                </ul><br>
                
                <div class="grid-100">    
                    <input id="send-btn" class="send-btn" type="submit" name="send-btn" value="Submit Message!">
                </div>   
              </form>
                    
            </div>
            </div>


           </div>
        </section>
      </div>


    
       </div>
           <div class="clear"></div>

    <!-- /CONTACT-->





    <!-- FOOTER-->

    <footer class="footer">
        <div class="grid-container">
            <div class="grid-100 mobile-grid-100 tablet-grid-100">
                  <span class="copyright">All Rights Reserved for <strong><a href="http://www.trackyourshares.com/"> TRACK YOUR SHARES </a></strong> &copy; 2013</span>
            </div>
        </div><!-- close container -->
    </footer><!-- close footer -->
    
    <!-- /FOOTER-->



    <!-- JS-->

    

</body>
</html>