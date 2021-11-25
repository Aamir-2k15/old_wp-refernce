<!doctype html>
<?php /*get theme options*/  $options = get_option( 'theme_settings' ); ?>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>
<?php bloginfo('name'); ?>
<?php wp_title('|',true); ?>
</title>
<meta name="description" content="Default Description">
<meta name="keywords" content="E-commerce"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- place favicon.ico in the root directory -->
<link rel="shortcut icon" type="image/x-icon" href="<?=$options['favicon'];?>">
<!-- google font rubik -->
<link href="https://fonts.googleapis.com/css?family=Rubik:400,500,600" rel="stylesheet"/>
<?php wp_head();?>        
<!-- modernizr js -->
<!--        <script src="<?=get_template_directory_uri() ?>/js/vendor/modernizr-2.8.3.min.js"></script>-->
</head>
<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- Wrapper Start -->
<div class="wrapper">
<!-- Newsletter Popup here -->
<!-- Header Area Start -->
<header>
<!-- Header Top Start -->
<div class="header-top off-white-bg">
<div class="container">
<!-- Header Top left Start -->
<div class="header-top-left f-left">
<ul class="header-list-menu">
<!-- Currency Start -->
<li><a href="#">Currency<i class="fa fa-angle-down"></i></a>
<ul class="ht-dropdown">
<!--widget 1-->
<?php dynamic_sidebar('topbar-left-1');?>
</ul>
</li>
<!-- Currency End -->
<!-- Language Start -->
<li><a href="#">Language<i class="fa fa-angle-down"></i></a>
<ul class="ht-dropdown">
<!--widget 2-->
<?php dynamic_sidebar('topbar-left-2');?>
</ul>
</li>
<!-- Language End -->
</ul>
<!-- Header-list-menu End -->
</div>
<!-- Header Top left End -->
<!-- Header Top Right Start -->
<div class="header-top-right f-right">
<ul class="header-list-menu right-menu">
<li class="hidden-xs"><span><?php if ( $options['topbar-text'] != '' ){ echo $options['topbar-text'];} ?></span>
</li>
<li><a href="#"><i class="fa fa-cog"></i>setting</a>
<!--<ul class="ht-dropdown ht-account">
<li><a href="account.html">My account</a>
</li>
<li><a href="wishlist.html">my wishlist</a>
</li>
<li><a href="login.html">sign in</a>
</li>
</ul>-->
<?php $args =  array(
'theme_location'  => 'topbar_menu',
'menu'            => 'topbar_menu',
'container'       => 'false',
'container_class' => '',
'container_id'    => '',
'menu_class'      => 'menu',
'menu_id'         => '',
'echo'            => true,
'fallback_cb'     => 'wp_page_menu',
'before'          => '',
'after'           => '',
'link_before'     => '',
'link_after'      => '',
'items_wrap'      => '<ul id="topbar_menu" class="ht-dropdown ht-account">%3$s</ul>',
'depth'           => 3,
'walker'          => ''
);?>
<?php wp_nav_menu($args);?>
</li>
</ul>
<!-- Header-list-menu End -->
</div>
<!-- Header Top Right End -->
</div>
<!-- Container End -->
</div>
<!-- Header Top End -->
<!-- Header Middle Start -->
<div class="header-middle white-bg header-sticky">
<div class="container">
<div class="row">
<div class="col-sm-12">
<!-- Logo Start -->
<div class="logo pull-left hidden-xs">
<a href="<?php echo bloginfo('url'); ?>" title="<?php echo bloginfo('name'); ?>">
<?php if(isset($options['logo'])){?>
<img src="<?php echo $options['logo']; ?>" alt="<?php echo $options['logo']; ?>">
<?php }else {?>
<?php echo bloginfo('name'); ?>
<?php }?>
</a> 
</div>
<!-- Logo End -->
<div class="col-xs-6 visible-xs full-col plr-0">
<!-- Logo Start -->
<div class="logo mt-12">
<a href="<?php echo bloginfo('url'); ?>" title="<?php echo bloginfo('name'); ?>">
<?php if(isset($options['logo'])){?>
<img src="<?php echo $options['logo']; ?>" alt="<?php echo $options['logo']; ?>">
<?php }else {?>
<?php echo bloginfo('name'); ?>
<?php }?>
</a>        
</div>
<!-- Logo End -->
</div>
<!-- Header Middle Menu Start -->
<div class="middle-menu hidden-xs pull-right">
<nav>
<?php $args =  array(
'theme_location'  => 'primary_menu',
'menu'            => 'primary_menu',
'container'       => 'false',
'container_class' => '',
'container_id'    => '',
'menu_class'      => 'menu',
'menu_id'         => '',
'echo'            => true,
'fallback_cb'     => 'wp_page_menu',
'before'          => '',
'after'           => '',
'link_before'     => '',
'link_after'      => '',
'items_wrap'      => '<ul id="primary_menu" class="middle-menu-list">%3$s</ul>',
'depth'           => 4,
'walker'         => new  Walker_Nav_Primary(), // This controls the display of the Bootstrap Navbar
'fallback_cb'    => 'Walker::fallback', // For menu fallback
);?>
<?php wp_nav_menu($args);?>
</nav>
</div>
<!-- Header Middle Menu End -->
</div>
<!-- Cartt Box Start -->
<div class="col-xs-6 full-col fl-r visible-xs">
<div class="cart-box text-right">
<ul>
<li><?php dynamic_sidebar('header-cart'); ?></li>
<li class="search-bar-xs visible-xs"><?php dynamic_sidebar('header-search'); ?>
</li>
</ul>
</div>
</div>
<!-- Cartt Box End -->
<!-- Mobile Menu  Start -->
<div class="col-xs-12 visible-xs">
<div class="mobile-menu">
<nav>
<?php $args =  array(
'theme_location'  => 'mobile_menu',
'menu'            => 'mobile_menu',
'container'       => false,
'container_class' => '',
'container_id'    => '',
'menu_class'      => '',
'menu_id'         => '',
'echo'            => true,
'fallback_cb'     => 'wp_page_menu',
'before'          => '',
'after'           => '',
'link_before'     => '',
'link_after'      => '',
'items_wrap'      => '<ul id="primary_menu" class="middle-menu-list">%3$s</ul>',
'depth'           => 4,
'walker'         =>  new  Walker_Nav_Mobile(), // This controls the display of the Bootstrap Navbar
'fallback_cb'    => 'Walker::fallback', // For menu fallback
);?>    
<?php wp_nav_menu($args);?>
</nav>
</div>
</div>
<!-- Mobile Menu  End -->
</div>
<!-- Row End -->
</div>
<!-- Container End -->
</div>
<!-- Header Middle End -->
<!-- Header Bottom Start -->
<div class="header-bottom black-bg hidden-xs">
<div class="container">
<div class="row">
<div class="col-xs-6 visible-xs full-col">
<!-- Logo Start -->
<div class="logo mt-10">
<a href="index.html"><img src="<?=get_template_directory_uri() ?>/img/logo/logo.png" alt="logo-image"></a>
</div>
<!-- Logo End -->
</div>
<!-- Primary Vertical-Menu Start -->
<div class="col-lg-3 col-md-3 col-sm-4 hidden-xs">
<div class="vertical-menu"><?php dynamic_sidebar('header-categories');?></div>
</div>
<!-- Primary Vertical-Menu End -->
<!-- Search Box Start -->
<div class="col-lg-6 col-md-6 col-sm-5 hidden-xs ">
<div class="search-box-view fix">
<?php dynamic_sidebar('header-search');?>
</div>
</div>
<!-- Search Box End -->
<!-- Cartt Box Start -->
<div class="col-lg-3 col-md-3 col-sm-3 col-xs-6 full-col fl-r">
<div class="cart-box text-right">
<?php dynamic_sidebar('header-cart');?>                                
</div>
</div>
<!-- Cartt Box End -->
</div>
<!-- Row End -->
</div>
<!-- Container End -->
</div>
<!-- Header Bottom End -->
</header>
<!-- Header Area End -->
<!-- Mobile Vertical Menu Start -->
<div class="mobile-vertical-menu visible-xs vertical-style-one">
<div class="container">
<div class="row">
<div class="col-xs-12">
<!-- Primary Vertical-Menu Start -->
<div class="vertical-menu">
<?php dynamic_sidebar('header-categories');?>
</div>
<!-- Primary Vertical Menu End -->
</div>
</div>
</div>
</div>
<!-- Mobile Vertical-Menu End -->