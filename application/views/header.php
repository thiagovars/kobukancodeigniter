<!DOCTYPE html>
<!--[if IE 8]>      <html class="ie ie8"> <![endif]-->
<!--[if IE 9]>      <html class="ie ie9"> <![endif]-->
<!--[if gt IE 9]><!-->  <html> <!--<![endif]-->
  <head>

    <!-- Basic -->
    <meta charset="utf-8">
    <title><?php echo $title; ?></title>   
    <meta name="keywords" content="Aikido, budô, escola, artes marciais" />
    <meta name="description" content="Kobukan - Escola de budô">
    <meta name="author" content="Thiago Silveira">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Libs CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>vendor/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>vendor/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="<?php echo base_url();?>vendor/owl-carousel/owl.carousel.css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url();?>vendor/owl-carousel/owl.theme.css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url();?>vendor/magnific-popup/magnific-popup.css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url();?>vendor/isotope/jquery.isotope.css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url();?>vendor/mediaelement/mediaelementplayer.css" media="screen">

    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>css/theme.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/theme-elements.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/theme-blog.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/theme-shop.css">
    <link rel="stylesheet" href="<?php echo base_url();?>css/theme-animate.css">

    <!-- Current Page CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>vendor/rs-plugin/css/settings.css" media="screen">
    <link rel="stylesheet" href="<?php echo base_url();?>vendor/circle-flip-slideshow/css/component.css" media="screen">

    <!-- Responsive CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>css/theme-responsive.css" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>css/skins/default.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="<?php echo base_url();?>css/custom.css">

    <!-- Head Libs -->
    <script src="<?php echo base_url();?>vendor/modernizr.js"></script>
    <script src="<?php echo base_url();?>vendor/jquery.js"></script>
    <script src="<?php echo base_url();?>vendor/jquery.appear.js"></script>
    <script src="<?php echo base_url();?>vendor/jquery.easing.js"></script>
    <script src="<?php echo base_url();?>vendor/jquery.cookie.js"></script>
    <script src="<?php echo base_url();?>vendor/bootstrap/js/bootstrap.js"></script>
    <script src="<?php echo base_url();?>vendor/jquery.validate.js"></script>
    <script src="<?php echo base_url();?>vendor/jquery.stellar.js"></script>
    <script src="<?php echo base_url();?>vendor/jquery.knob.js"></script>
    <script src="<?php echo base_url();?>vendor/jquery.gmap.js"></script>
    <script src="<?php echo base_url();?>vendor/twitterjs/twitter.js"></script>
    <script src="<?php echo base_url();?>vendor/isotope/jquery.isotope.js"></script>
    <script src="<?php echo base_url();?>vendor/owl-carousel/owl.carousel.js"></script>
    <script src="<?php echo base_url();?>vendor/jflickrfeed/jflickrfeed.js"></script>
    <script src="<?php echo base_url();?>vendor/magnific-popup/magnific-popup.js"></script>
    <script src="<?php echo base_url();?>vendor/mediaelement/mediaelement-and-player.js"></script>

    <!-- Theme Initializer -->
    <script src="<?php echo base_url();?>js/theme.plugins.js"></script>
    <script src="<?php echo base_url();?>js/theme.js"></script>

    <!-- Custom JS -->
    <script src="<?php echo base_url();?>js/custom.js"></script>

    <!-- <script src="http://maps.google.com/maps/api/js?sensor=false"></script> -->
    
    <!--[if IE]>
      <link rel="stylesheet" href="/css/ie.css">
    <![endif]-->

    <!--[if lte IE 8]>
      <script src="/vendor/respond.js"></script>
    <![endif]-->
  </head>
  <body>
    <div class="body">
      <header id="header">
        <?php 
        include_once(APPPATH.'../assets/menu.php'); ?>
      </header>