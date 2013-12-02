<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<?php $this->load->helper('url');?>

<head>

    <title>ManageMyStocks |Simple.Stock.Manager</title>

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
                            <a href="#connect-section">Contact</a>
                            <a href="<?php echo base_url("index.php/users")?>">Login</a>
            
                        </nav>
                    </div>
                </div>
        </div>
    </header>
    
    <div class="clear"></div>
    
    <section class="hero ha-waypoint parallax-section parallax-banner-1 parallax-background" data-animate-up="ha-header-hide" data-animate-down="ha-header-hide">
        <div class="parallax-overlay parallax-overlay-1"></div> 
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
                    <h1>Manage My Stocks</h1>
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
                <div class="navi-sq-2"><a href="#portfolio-section">
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
                    <p class="section-slogan"><strong>Mangae My Stock</strong> is an application that will enable you to manage you personal shares on the stock market in three simple steps.</p>
                </header>
            </div>
            
            

            
            <div class="grid-50 tablet-grid-100 mobile-grid-100 about-box">
                <figure class="about-icon-r"><img src="<?php echo base_url("assets/yellow/images/icon-3.png")?>" alt="brand-identity"></figure>
                
                <div class="about-box-r">
                    <h3><strong>Visit Our Site</strong></h3>
                    <p>Welcome the fact that you are here means that you are intrested with the stock market shares.</p>
                </div>
            </div>
            
            <div class="grid-50 tablet-grid-100 mobile-grid-100 about-box">
                <figure class="about-icon"><img src="<?php echo base_url("assets/yellow/images/icon-4.png")?>" alt="consultancy"></figure>
                
                <div class="about-box">
                    <h3><strong>Register</strong></h3>
                    <p>Register as a member of <a href="">Manage My Stocks</a> today its free </p>
                </div>
            </div>
            

            <div class="grid-50 tablet-grid-100 mobile-grid-100 about-box">
                <figure class="about-icon-r"><img src="<?php echo base_url("assets/yellow/images/icon-1.png")?>" alt="app-development"></figure>
                
                <div class="about-box-r">
                    <h3><strong>Login</strong></h3>
                    <p>Login using the login panel</p>
                </div>
            </div>
            
            <div class="grid-50 tablet-grid-100 mobile-grid-100 about-box">
                <figure class="about-icon"><img src="<?php echo base_url("assets/yellow/images/icon-2.png")?>" alt="ui-design"></figure>
                
                <div class="about-box">
                    <h3><strong>Setup Account</strong></h3>
                    <p>Setup your personal account by adding stocks you interested in or already have shares</p>
                </div>
            </div>
            <div class="grid-50 tablet-grid-100 mobile-grid-100 about-box">
                <figure class="about-icon-r"><img src="<?php echo base_url("assets/yellow/images/icon-5.png")?>" alt="brand-identity"></figure>
                
                <div class="about-box-r">
                    <h3><strong>Dashboard</strong></h3>
                    <p>Access dashboard to view realtime updates on stock data</p>
                </div>
            </div>
            
            <div class="grid-50 tablet-grid-100 mobile-grid-100 about-box">
                <figure class="about-icon"><img src="<?php echo base_url("assets/yellow/images/icon-6.png")?>" alt="consultancy"></figure>
                
                <div class="about-box">
                    <h3><strong>Updates</strong></h3>
                    <p>View updates on your stocks</p>
                </div>
            </div>



        </div>
    </section>
    <div class="clear"></div>

    <!-- /ABOUT -->
            



    
    
    <!-- PARALLAX -->

     <section id="parallax-section-2" class="parallax-section parallax-banner-2 parallax-background parallax-section-2 ha-waypoint">
     <div class="parallax-overlay parallax-overlay-2"></div>
        <div class="grid-container parallax-content">
            
                <div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">
                    <header class="parallax-header">
                        <h2 class="parallax-title"><span>Our Promise</span></h2><br>
                         <div class="hero-title-holder parallax-slogan">
                         We promise to always provide relevant,  <span>Upto date </span>on your stock market shares

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
                    <p class="section-slogan">We are young software developers who have a passion for web and mobile technologies.We develop products that make<strong> your life </strong>easier</p>
                </header>
            </div>
             
      <div class="grey" >
        <div class="container" >
            <div class="row">
            <div class="member-box col-md-3 col-sm-6">
                <article>
                    <div class="team-box">
                        <img src="<?php echo base_url("assets/yellow/images/team/team1.jpg")?>" alt="Your Name" class="img-responsive">
                        <p class="team-title">Griffin Muteti</p>
                        <p class="job-title">Developer & Designer</p>
                        <div class="socials">
                            <div class="social-media-icons">
                                <a href="#" data-thumb="tooltip" data-toggle="tooltip" data-placement="top" title="Facebook" data-original-title="Facebook"><i class="icon-facebook"></i></a>
                                <a href="#" data-thumb="tooltip" data-toggle="tooltip" data-placement="top" title="Twitter" data-original-title="Twitter"><i class="icon-twitter"></i></a>
                                <a href="#" data-thumb="tooltip" data-toggle="tooltip" data-placement="top" title="Linkedin" data-original-title="Linkedin"><i class="icon-linkedin"></i></a>
                                <a href="#" data-thumb="tooltip" data-toggle="tooltip" data-placement="top" title="Dribbble" data-original-title="Dribbble"><i class="icon-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                </article>  
            </div>
            <div class="member-box col-md-3 col-sm-6">
                <article>
                    <div class="team-box">
                        <img src="<?php echo base_url("assets/yellow/images/team/team2.jpg")?>" alt="Your Name" class="img-responsive">
                        <p class="team-title">Dennis Mageto</p>
                        <p class="job-title">Developer</p>
                        <div class="socials">
                            <div class="social-media-icons">
                                <a href="#" data-thumb="tooltip" data-toggle="tooltip" data-placement="top" title="Facebook" data-original-title="Facebook"><i class="icon-facebook"></i></a>
                                <a href="#" data-thumb="tooltip" data-toggle="tooltip" data-placement="top" title="Twitter" data-original-title="Twitter"><i class="icon-twitter"></i></a>
                                <a href="#" data-thumb="tooltip" data-toggle="tooltip" data-placement="top" title="Linkedin" data-original-title="Linkedin"><i class="icon-linkedin"></i></a>
                                <a href="#" data-thumb="tooltip" data-toggle="tooltip" data-placement="top" title="Dribbble" data-original-title="Dribbble"><i class="icon-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                </article>  
            </div>
            <div class="member-box col-md-3 col-sm-6">
                <article>
                    <div class="team-box">
                        <img src="<?php echo base_url("assets/yellow/images/team/team3.jpg")?>" alt="Your Name" class="img-responsive">
                        <p class="team-title">Brian Mosigisi</p>
                        <p class="job-title">Developer</p>
                        <div class="socials">
                            <div class="social-media-icons">
                                <a href="#" data-thumb="tooltip" data-toggle="tooltip" data-placement="top" title="Facebook" data-original-title="Facebook"><i class="icon-facebook"></i></a>
                                <a href="#" data-thumb="tooltip" data-toggle="tooltip" data-placement="top" title="Twitter" data-original-title="Twitter"><i class="icon-twitter"></i></a>
                                <a href="#" data-thumb="tooltip" data-toggle="tooltip" data-placement="top" title="Linkedin" data-original-title="Linkedin"><i class="icon-linkedin"></i></a>
                                <a href="#" data-thumb="tooltip" data-toggle="tooltip" data-placement="top" title="Dribbble" data-original-title="Dribbble"><i class="icon-dribbble"></i></a>
                            </div>
                        </div>
                    </div>
                </article>  
            </div>
            
        </div>
        </div>
    </div>
    

    </div>
    </section>
   
    <!-- /TEAM -->
    


    <!-- COUNT -->

    <section id="counter-section">
    <section id="cta-section" class="cta-section-count content-section">
        <div class="grid-container">    
                    <h3 class="counter-titr">SOME FACTS</h3>  

         
            <div class="grid-25 mobile-grid-100 tablet-grid-25">
                <div class="counter-box counter" data-counter="1">
                    <span class="count">1</span>
                    <h3 class="counter-details"><strong style="color:#fff">3 members only</strong>:small teams build awesome products</h3>
                </div>
            </div>


            <div class="grid-25 mobile-grid-100 tablet-grid-25">
                <div class="counter-box counter" data-counter="2">
                    <span class="count">2</span>
                    <h3 class="counter-details">We are part of a larger group of software engineers and designers named :<strong style="color:#fff">Codebots</strong></h3>
                </div>
            </div>


            <div class="grid-25 mobile-grid-100 tablet-grid-25">
                <div class="counter-box counter" data-counter="3">
                    <span class="count">3</span>
                    <h3 class="counter-details"><strong style="color:#fff">PHP and JAVA </strong> :our favorite languages</h3>
                </div>
            </div>

            
            
            <div class="grid-25 mobile-grid-100 tablet-grid-25">
                <div class="counter-box counter" data-counter="4">
                    <span class="count">4</span>
                    <h3 class="counter-details">We make <strong style="color:#fff">software</strong> products that make <strong style="color:#fff">your life </strong>easier</h3>
                </div>
            </div>

            </div> 

    </section>
    </section>

    <div class="clear"></div>    

    <!-- /COUNT -->


    <!-- REGISTER -->

    <div class="nav-waypoint">
    <section id="service-section" class="service-section content-section ha-waypoint services">
           <div class="grid-container">
            
            <div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">
                <header class="section-header"><br><br><br><br>
                    <h2 class="section-title"><span>REGISTER</span></h2>
                    <h2 class="section-slogan"><span>click <a href="<?php echo base_url("index.php/users/register")?>">here</a> to create an account</span></h2>
                    
                </header>
            </div>
            
        
           </div>
        </section>
    </div>


    
    </div>
    
    <div class="clear"></div>

    <!-- /SERVICES -->




    <!-- PURCHASE -->
    
     <section id="social-section" class="parallax-section parallax-banner-4 parallax-background social-section">
     <div class="parallax-overlay parallax-overlay-4"></div><!-- parallax overlay -->
        <div class="grid-container parallax-content">
            <div class="grid-parent grid-100 mobile-grid-100 tablet-grid-100">
            
                <div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">
                    <header class="parallax-header">
                    <p class="parallax-slogan">Already a  <strong>member </strong> access your dashboard</p>
                    </header>
                </div>
            
            <div class="clear"></div>
            
            <ul class="social-network">
                <li class="grid-100 tablet-grid-100 mobile-grid-100">
                    <a class="social-link" href="<?php echo base_url("index.php/users")?>" target="_blank">
                    <span class="social-icon-b">LOGIN</span>
                    </a>
                </li>
            </ul>
        
            </div>
        </div>
    </section>
    </div>
    
    <div class="clear"></div>

    <!-- PURCHASE -->


    







    
    
    <!-- ADDRESS-->

     <!-- contact section -->
     <section id="connect-section" class="contact-section parallax-section parallax-banner-5 parallax-background">
     <div class="parallax-overlay parallax-overlay-5"></div><!-- parallax overlay -->
        <div class="grid-container parallax-content">
        
                <!-- parallax header -->
                <div class="grid-70 prefix-15 mobile-grid-100 tablet-grid-100">

                    <header class="section-header">

                       <p class="section-slogan-1">info@managemystocks.com<br><strong>: +254715-274-848 </strong></p> 
                       <p class="section-slogan-2">Address: Kenya, Nairobi : 47773-00100</p>
                    </header>

                </div>
                <!-- close parallax header -->
            
            <div class="clear"></div>
            
            <!-- contact wrap -->
            <div class="grid-100 mobile-grid-100 tablet-grid-100">
            <div class="contact-wrap">
            
        
            </div>
            </div><br><br><br><!-- close contact wrap -->
            
            
                <!-- social network -->
            <ul class="social-network">
                <li class="facebook grid-30 tablet-grid-30 mobile-grid-0">
                    <a class="social-link" href="#" target="_blank">
                    <span class="social-icon-e"><i class="icon-4x"></i></span>
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
                  <span class="copyright">All Rights Reserved for <strong><a href="http://www.managemystocks.com/"> MANAGE MY STOCKS </a></strong> &copy; 2013</span>
            </div>
        </div><!-- close container -->
    </footer><!-- close footer -->
    
    <!-- /FOOTER-->



    <!-- JS-->

    

</body>
</html>