<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="keywords" content="HTML5 Template" />
        <meta name="description" content="Be-Photography | Creative Photography Agency, Portfolio and Multipurpose HTML5 Responsive Template" />
        <meta name="author" content="itgeeksin.com" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <title>Be-Photography | Creative Photography Agency, Portfolio and Multipurpose HTML5 Responsive Template</title>
        <link rel="shortcut icon" href="http://preview.itgeeksin.com/photography/assets/img/favicon.ico" type="image/x-icon">
        <link rel="icon" href="http://preview.itgeeksin.com/photography/assets/img/favicon.ico" type="image/x-icon">
    
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800">
        
        <link href="<?php echo base_url();?>assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/plugin/megamenu/css/hover-dropdown-menu.css" rel="stylesheet">
        
        <link href="<?php echo base_url();?>assets/plugin/fancyBox/css/jquery.fancybox.css" rel="stylesheet">
        <link href="<?php echo base_url();?>assets/plugin/owl-carousel/css/owl.carousel.css" rel="stylesheet"> 
        <link href="<?php echo base_url();?>assets/plugin/owl-carousel/css/owl.theme.default.css" rel="stylesheet"> 
        <link href="<?php echo base_url();?>assets/plugin/font-awesome/css/font-awesome.min.css" rel="stylesheet"> 
        <link href="<?php echo base_url();?>assets/plugin/hover-effect/css/themeHover.css" rel="stylesheet"> 
        <link href="<?php echo base_url();?>assets/plugin/mixItUp/css/mixitup.css" rel="stylesheet"> 
        <link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet"> 
        <link href="<?php echo base_url();?>assets/css/responsive.css" rel="stylesheet"> 
        <link href="<?php echo base_url();?>assets/css/color.css" rel="stylesheet"> 
    </head>
    <body>
        <div class="preloader">
            <div class="itg-loader">
                <figure>
                    <img src="assets/img/loader/loder.png" alt=""/>
                </figure>
                <h4>Loading</h4>
            </div>
        </div> 
        <header id="header">
            <div id="main-menu" class="wa-main-menu">
                <!-- Menu -->
                <div class="wathemes-menu relative">
                    <!-- navbar -->
                    <div class="navbar navbar-default mar0" role="navigation">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-md-12 head-box">
                                    <div class="navbar-header">
                                        <!-- Button For Responsive toggle -->
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span> 
                                        <span class="icon-bar"></span> 
                                        <span class="icon-bar"></span> 
                                        <span class="icon-bar"></span>
                                        </button> 
                                        <!-- Logo -->
                                        <a class="navbar-brand" href="<?php echo base_url();?>">
                                        <img class="site_logo" alt="Site Logo"  src="<?php echo base_url();?>assets/img/logo.png" />
                                        </a>
                                        <div class="head-search hidden-lg hidden-md hidden-sm ">
                                            <a href="<?php echo base_url();?>" class="search-click"><i class="fa fa-search" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                    <!-- Navbar Collapse -->
                                    <div class="navbar-collapse collapse">
                                        <!-- nav -->
                                        <div class="col-md-1 head-search hidden-xs">
                                            <a href="index.html#" class="search-click"><i class="fa fa-search" aria-hidden="true"></i></a>
                                        </div>
                                        <ul class="nav navbar-nav">

                                            <!-- Home -->
                                            <li class="<?php if ($cur == 'Home'){echo 'current-menu-parent'; } ?> menu-item">
                                                <a href="<?php echo base_url();?>">Home</a>
                                            </li>
                                
                                            <li class="<?php if ($cur == 'About'){echo 'current-menu-parent'; } ?> menu-item">
                                                <a href="<?php echo base_url();?>about_us">ABOUT US</a>
                                            </li>
                                            
                                            <li>
                                                <a href="<?php echo base_url();?>portfolio">PORTFOLIO</a> 
                                            </li>
                                            <li>
                                                <a href="<?php echo base_url();?>blog">BLOG</a> 
                                            </li>
                                            <li><a href="<?php echo base_url();?>contact_us">CONTACT US</a></li>
                                        </ul>
                                    </div>
                                    <!-- navbar-collapse -->
                                </div>
                                <!-- col-md-12 -->
                            </div>
                            <!-- row -->
                        </div>
                        <!-- container -->
                    </div>
                    <!-- navbar -->
                    <div id="search-open" class="top-search">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="input-group"> <span class="input-group-addon"><i class="fa fa-search"></i></span>
                                    <input type="text" class="form-control" placeholder="Search">
                                    <a class="input-group-addon close-search search-close"><i class="fa fa-times"></i></a> 
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  Menu -->
            </div>
        </header>